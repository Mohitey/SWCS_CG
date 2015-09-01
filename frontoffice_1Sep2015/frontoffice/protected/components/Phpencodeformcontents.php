<?php
require("Aesctr.inc.php");
/**
 * Class to Encode Form Contents from clientend to server. 
 *
 * @author Rochak Chauhan <rochakchauhan@gmail.com> 
 */
class Phpencodeformcontents extends AesCtr {
    private $secret="";
    
    public function __construct($secret) {
        $this->secret=$secret;
    }
    
    public static function decodeDataArray($secret,$post) {
        $return=array();
        foreach ($post as $k=>$v){
            if(is_array($v)){
                $return[$k]=$v;
            }
            else{
                $v=base64_decode($v);
                $v=str_replace($secret, '', $v);
                $return[$k]=$v;
            }
        }
        return $return;
    }
    
    public function decodeAesDataArray($secret,$post) { //echo "<pre>"; print_r($post); die;
        $return=array();
        foreach ($post as $k=>$v){
            //$v=base64_decode($v);
            //$v=str_replace($this->secret, '', $v);
            $v=AesCtr::decrypt($v, $secret, 256); 
            $v=str_replace($secret, '', $v);
            $return[$k]=$v;
        }
        return $return;
    }

    public function getBase64encodeJavascriptFunctions() {
        return 'var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(input){var output="";var chr1,chr2,chr3,enc1,enc2,enc3,enc4;var i=0;input=Base64._utf8_encode(input);while(i<input.length){chr1=input.charCodeAt(i++);chr2=input.charCodeAt(i++);chr3=input.charCodeAt(i++);enc1=chr1>>2;enc2=((chr1&3)<<4)|(chr2>>4);enc3=((chr2&15)<<2)|(chr3>>6);enc4=chr3&63;if(isNaN(chr2)){enc3=enc4=64}else if(isNaN(chr3)){enc4=64}output=output+this._keyStr.charAt(enc1)+this._keyStr.charAt(enc2)+this._keyStr.charAt(enc3)+this._keyStr.charAt(enc4)}return output},decode:function(input){var output="";var chr1,chr2,chr3;var enc1,enc2,enc3,enc4;var i=0;input=input.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(i<input.length){enc1=this._keyStr.indexOf(input.charAt(i++));enc2=this._keyStr.indexOf(input.charAt(i++));enc3=this._keyStr.indexOf(input.charAt(i++));enc4=this._keyStr.indexOf(input.charAt(i++));chr1=(enc1<<2)|(enc2>>4);chr2=((enc2&15)<<4)|(enc3>>2);chr3=((enc3&3)<<6)|enc4;output=output+String.fromCharCode(chr1);if(enc3!=64){output=output+String.fromCharCode(chr2)}if(enc4!=64){output=output+String.fromCharCode(chr3)}}output=Base64._utf8_decode(output);return output},_utf8_encode:function(string){string=string.replace(/\r\n/g,"\n");var utftext="";for(var n=0;n<string.length;n++){var c=string.charCodeAt(n);if(c<128){utftext+=String.fromCharCode(c)}else if((c>127)&&(c<2048)){utftext+=String.fromCharCode((c>>6)|192);utftext+=String.fromCharCode((c&63)|128)}else{utftext+=String.fromCharCode((c>>12)|224);utftext+=String.fromCharCode(((c>>6)&63)|128);utftext+=String.fromCharCode((c&63)|128)}}return utftext},_utf8_decode:function(utftext){var string="";var i=0;var c=c1=c2=0;while(i<utftext.length){c=utftext.charCodeAt(i);if(c<128){string+=String.fromCharCode(c);i++}else if((c>191)&&(c<224)){c2=utftext.charCodeAt(i+1);string+=String.fromCharCode(((c&31)<<6)|(c2&63));i+=2}else{c2=utftext.charCodeAt(i+1);c3=utftext.charCodeAt(i+2);string+=String.fromCharCode(((c&15)<<12)|((c2&63)<<6)|(c3&63));i+=3}}return string}}';
    }   
    
    public function getAesJavascriptFunctions(){
        return '"use strict";var Aes={};Aes.cipher=function(e,t){var n=4;var r=t.length/n-1;var i=[[],[],[],[]];for(var s=0;s<4*n;s++)i[s%4][Math.floor(s/4)]=e[s];i=Aes.addRoundKey(i,t,0,n);for(var o=1;o<r;o++){i=Aes.subBytes(i,n);i=Aes.shiftRows(i,n);i=Aes.mixColumns(i,n);i=Aes.addRoundKey(i,t,o,n)}i=Aes.subBytes(i,n);i=Aes.shiftRows(i,n);i=Aes.addRoundKey(i,t,r,n);var u=new Array(4*n);for(var s=0;s<4*n;s++)u[s]=i[s%4][Math.floor(s/4)];return u};Aes.keyExpansion=function(e){var t=4;var n=e.length/4;var r=n+6;var i=new Array(t*(r+1));var s=new Array(4);for(var o=0;o<n;o++){var u=[e[4*o],e[4*o+1],e[4*o+2],e[4*o+3]];i[o]=u}for(var o=n;o<t*(r+1);o++){i[o]=new Array(4);for(var a=0;a<4;a++)s[a]=i[o-1][a];if(o%n==0){s=Aes.subWord(Aes.rotWord(s));for(var a=0;a<4;a++)s[a]^=Aes.rCon[o/n][a]}else if(n>6&&o%n==4){s=Aes.subWord(s)}for(var a=0;a<4;a++)i[o][a]=i[o-n][a]^s[a]}return i};Aes.subBytes=function(e,t){for(var n=0;n<4;n++){for(var r=0;r<t;r++)e[n][r]=Aes.sBox[e[n][r]]}return e};Aes.shiftRows=function(e,t){var n=new Array(4);for(var r=1;r<4;r++){for(var i=0;i<4;i++)n[i]=e[r][(i+r)%t];for(var i=0;i<4;i++)e[r][i]=n[i]}return e};Aes.mixColumns=function(e,t){for(var n=0;n<4;n++){var r=new Array(4);var i=new Array(4);for(var s=0;s<4;s++){r[s]=e[s][n];i[s]=e[s][n]&128?e[s][n]<<1^283:e[s][n]<<1}e[0][n]=i[0]^r[1]^i[1]^r[2]^r[3];e[1][n]=r[0]^i[1]^r[2]^i[2]^r[3];e[2][n]=r[0]^r[1]^i[2]^r[3]^i[3];e[3][n]=r[0]^i[0]^r[1]^r[2]^i[3]}return e};Aes.addRoundKey=function(e,t,n,r){for(var i=0;i<4;i++){for(var s=0;s<r;s++)e[i][s]^=t[n*4+s][i]}return e};Aes.subWord=function(e){for(var t=0;t<4;t++)e[t]=Aes.sBox[e[t]];return e};Aes.rotWord=function(e){var t=e[0];for(var n=0;n<3;n++)e[n]=e[n+1];e[3]=t;return e};Aes.sBox=[99,124,119,123,242,107,111,197,48,1,103,43,254,215,171,118,202,130,201,125,250,89,71,240,173,212,162,175,156,164,114,192,183,253,147,38,54,63,247,204,52,165,229,241,113,216,49,21,4,199,35,195,24,150,5,154,7,18,128,226,235,39,178,117,9,131,44,26,27,110,90,160,82,59,214,179,41,227,47,132,83,209,0,237,32,252,177,91,106,203,190,57,74,76,88,207,208,239,170,251,67,77,51,133,69,249,2,127,80,60,159,168,81,163,64,143,146,157,56,245,188,182,218,33,16,255,243,210,205,12,19,236,95,151,68,23,196,167,126,61,100,93,25,115,96,129,79,220,34,42,144,136,70,238,184,20,222,94,11,219,224,50,58,10,73,6,36,92,194,211,172,98,145,149,228,121,231,200,55,109,141,213,78,169,108,86,244,234,101,122,174,8,186,120,37,46,28,166,180,198,232,221,116,31,75,189,139,138,112,62,181,102,72,3,246,14,97,53,87,185,134,193,29,158,225,248,152,17,105,217,142,148,155,30,135,233,206,85,40,223,140,161,137,13,191,230,66,104,65,153,45,15,176,84,187,22];Aes.rCon=[[0,0,0,0],[1,0,0,0],[2,0,0,0],[4,0,0,0],[8,0,0,0],[16,0,0,0],[32,0,0,0],[64,0,0,0],[128,0,0,0],[27,0,0,0],[54,0,0,0]];if(typeof module!="undefined"&&module.exports)module.exports=Aes;if(typeof define=="function"&&define.amd)define([],function(){return Aes});"use strict";if(typeof module!="undefined"&&module.exports)var Aes=require("./aes");Aes.Ctr={};Aes.Ctr.encrypt=function(e,t,n){var r=16;if(!(n==128||n==192||n==256))return"";e=String(e).utf8Encode();t=String(t).utf8Encode();var i=n/8;var s=new Array(i);for(var o=0;o<i;o++){s[o]=isNaN(t.charCodeAt(o))?0:t.charCodeAt(o)}var u=Aes.cipher(s,Aes.keyExpansion(s));u=u.concat(u.slice(0,i-16));var a=new Array(r);var f=(new Date).getTime();var l=f%1e3;var c=Math.floor(f/1e3);var h=Math.floor(Math.random()*65535);for(var o=0;o<2;o++)a[o]=l>>>o*8&255;for(var o=0;o<2;o++)a[o+2]=h>>>o*8&255;for(var o=0;o<4;o++)a[o+4]=c>>>o*8&255;var p="";for(var o=0;o<8;o++)p+=String.fromCharCode(a[o]);var d=Aes.keyExpansion(u);var v=Math.ceil(e.length/r);var m=new Array(v);for(var g=0;g<v;g++){for(var y=0;y<4;y++)a[15-y]=g>>>y*8&255;for(var y=0;y<4;y++)a[15-y-4]=g/4294967296>>>y*8;var b=Aes.cipher(a,d);var w=g<v-1?r:(e.length-1)%r+1;var E=new Array(w);for(var o=0;o<w;o++){E[o]=b[o]^e.charCodeAt(g*r+o);E[o]=String.fromCharCode(E[o])}m[g]=E.join("")}var S=p+m.join("");S=S.base64Encode();return S};Aes.Ctr.decrypt=function(e,t,n){var r=16;if(!(n==128||n==192||n==256))return"";e=String(e).base64Decode();t=String(t).utf8Encode();var i=n/8;var s=new Array(i);for(var o=0;o<i;o++){s[o]=isNaN(t.charCodeAt(o))?0:t.charCodeAt(o)}var u=Aes.cipher(s,Aes.keyExpansion(s));u=u.concat(u.slice(0,i-16));var a=new Array(8);var f=e.slice(0,8);for(var o=0;o<8;o++)a[o]=f.charCodeAt(o);var l=Aes.keyExpansion(u);var c=Math.ceil((e.length-8)/r);var h=new Array(c);for(var p=0;p<c;p++)h[p]=e.slice(8+p*r,8+p*r+r);e=h;var d=new Array(e.length);for(var p=0;p<c;p++){for(var v=0;v<4;v++)a[15-v]=p>>>v*8&255;for(var v=0;v<4;v++)a[15-v-4]=(p+1)/4294967296-1>>>v*8&255;var m=Aes.cipher(a,l);var g=new Array(e[p].length);for(var o=0;o<e[p].length;o++){g[o]=m[o]^e[p].charCodeAt(o);g[o]=String.fromCharCode(g[o])}d[p]=g.join("")}var y=d.join("");y=y.utf8Decode();return y};if(typeof String.prototype.utf8Encode=="undefined"){String.prototype.utf8Encode=function(){return unescape(encodeURIComponent(this))}}if(typeof String.prototype.utf8Decode=="undefined"){String.prototype.utf8Decode=function(){try{return decodeURIComponent(escape(this))}catch(e){return this}}}if(typeof String.prototype.base64Encode=="undefined"){String.prototype.base64Encode=function(){if(typeof btoa!="undefined")return btoa(this);if(typeof Buffer!="undefined")return(new Buffer(this,"utf8")).toString("base64");throw new Error("No Base64 Encode")}}if(typeof String.prototype.base64Decode=="undefined"){String.prototype.base64Decode=function(){if(typeof atob!="undefined")return atob(this);if(typeof Buffer!="undefined")return(new Buffer(this,"base64")).toString("utf8");throw new Error("No Base64 Decode")}}if(typeof module!="undefined"&&module.exports)module.exports=Aes.Ctr;if(typeof define=="function"&&define.amd)define(["Aes"],function(){return Aes.Ctr})';
    }
      
}
?>
