<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
            //array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements())
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            if (!$this->_identity->authenticate())
                $this->addError('password', 'Incorrect username or password.');
        }
    }
    
    /**
     * 
     * @param string $user
     * @param string $passwd
     */
    public function isAuthUser($user, $passwd){
        $passwd=hash_hmac('sha1', $passwd , PASSWORD_SALT);
        //$sql="SELECT count(*) as TOTAL,full_name, uid, role_id FROM users WHERE email=:username AND password=:passwd AND is_active=1";
        $sql="SELECT count(*) as TOTAL,full_name, uid, role_id FROM bo_users WHERE email=:username AND password=:passwd";        
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        // replace the placeholder ":username" with the actual username value
        $command->bindParam(":username",$user,PDO::PARAM_STR);
        // replace the placeholder ":email" with the actual email value
        $command->bindParam(":passwd",$passwd,PDO::PARAM_STR);
        $row=$command->queryRow(); 
		//echo $user."======".$passwd; 
        //echo "<pre>"; print_r($row); die;
        if($row===FALSE){
          return FALSE;
        }
        else{
            if($row['TOTAL']==0){
              return FALSE;
            }
            else{
		@session_start();
                $_SESSION['UID']=$row['uid'];
                $_SESSION['row']=$row;

                $session = new CHttpSession;
                $session->open();
                $session['UID']=$row['uid'];
                session_start();
				$session['row']=$row;
				$_SESSION['row']=$row;
                Yii::app()->user->name=$session['FULL_NAME']=$row['full_name'];
                $session['ROLE_ID']=$row['role_id'];
               // echo "<pre>"; print_r($_SESSION); die;
		return TRUE;
            }
        }
    }
    
    /**
     * 
     * @param string $user
     * @param string $passwd
     */
    public function isActiveAuthUser($user, $passwd){
        $passwd=hash_hmac('sha1', $passwd , PASSWORD_SALT);
        $sql="SELECT count(*) as TOTAL,full_name, uid, role_id FROM bo_users WHERE email=:username AND password=:passwd AND is_active=1";
        
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        // replace the placeholder ":username" with the actual username value
        $command->bindParam(":username",$user,PDO::PARAM_STR);
        // replace the placeholder ":email" with the actual email value
        $command->bindParam(":passwd",$passwd,PDO::PARAM_STR);
        $row=$command->queryRow();
		
		//echo $user."======".$passwd; 
        //echo "<pre>"; print_r($row); die;
        
        if($row===FALSE){
            return FALSE;
        }
        else{
            if($row['TOTAL']==0){
                return FALSE;
            }
            else{
		@session_start();
		$_SESSION['UID']=$row['uid'];
		$_SESSION['row']=$row;

                $session = new CHttpSession;
                $session->open();
                $session['UID']=$row['uid'];
                session_start();
				$session['row']=$row;
				$_SESSION['row']=$row;
                Yii::app()->user->name=$session['FULL_NAME']=$row['full_name'];
                $session['ROLE_ID']=$row['role_id'];
                if(!empty($row['role_id'])) {
                    $session['PAGE_IDS'] = Utility::getMapedPageIds($row['role_id']);
                }
                //echo "<pre>"; print_r($session); print_r($row); print_r($_SESSION); echo "===".$session['uid']; die;
                Utility::initLogin();
                Utility::addLoginAccessLog($row['uid']);
                return TRUE;
            }
        }
    }
    
    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $session = new CHttpSession;
            $session->open();
            $session['UID']=444;
            Utility::initLogin();
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }

}
