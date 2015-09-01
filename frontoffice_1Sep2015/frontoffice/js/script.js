var initFontSize = 0;
var fontSize = 0;
var font_plus = 0;
var font_minus = 0;
var b = 0;

var section = '.bodyclass *';
var originalFontSize = $(section).css('font-size');  

function zoomIn() {
	if (fontSize == 0) {
		initFontSize = fontSize = parseInt($("body").css("font-size"));
	}
	if (font_plus < 3) {
		var fontSize2 = fontSize = fontSize + 1;
		fontSize2 = fontSize2 + "px"
		font_plus++;
		font_minus = 0;
		$("*").css({
			'font-size' : fontSize2
		});
	}
}
function zoomOut() {
	if (fontSize == 0) {
		initFontSize = fontSize = parseInt($("body").css("font-size"));
	}
	if (font_minus < 3) {
		var fontSize2 = fontSize = fontSize - 1;
		fontSize2 = fontSize2 + "px"
		font_minus++;
		font_plus = 0;
		$("*").css({
			'font-size' : fontSize2
		});
	}
}
function resetZoom() {
	location.reload(true);
	//location.href=location.href;
}

function search() {
	$("#searchform").submit();
}

function resetFont(){
    $(section).css('font-size', originalFontSize);
}
function increaseFont() {
    $(section).each(function(idx, el){
        var currentFontSize = $(this).css('font-size'),
            currentFontSizeNum = parseFloat(currentFontSize, 10),
            newFontSize = currentFontSizeNum / 0.8;
        $(this).css('font-size', newFontSize);              
    });
}
function resetFont(){
	 $(section).each(function(idx, el){
        newFontSize = originalFontSize;
        $(this).css('font-size', newFontSize);              
    });
}
function decreaseFont(){
    $(section).each(function(idx, el){
        var currentFontSize = $(this).css('font-size');


        var currentFontSizeNum = parseFloat(currentFontSize, 10);
        var newFontSize = currentFontSizeNum*0.8;

        $(this).css('font-size', newFontSize);        
   });
}

function setLang(i) {
	document.cookie = "langId=" + i;
	location.reload(true);
}

function setTheme(t) {
	document.cookie = "theme=" +t;
	location.reload(true);
}

function bw() {
	if (b == 0) {
		setTheme("b");
		//$("#bc").attr("href", "/themes/cmo_final/css/style_black.css");
		b = 1;
	} else {		
		setTheme("c");
		//$("#bc").attr("href", "/themes/cmo_final/css/style.css");
		b = 0;
	}
}

function fullscreenVideo(vid) {
	var myVideo = document.getElementById(vid);
	myVideo.width = 1024;
}

function play(i, v) {
	if ($("#" + i)) {
		var v = base64_decode(v);
		var code = '<video controls  style="width:415px;height:230px;">';
		code += "<source src=" + v + " type='video/mp4' />";
		code += "<source src=" + v + " type='video/ogg' />";
		code += "Your browser does not support HTML5 video.Please upgrade your browser.</video>";
		$("#" + i).html(code);
	}
}

function playAudio(i, v) {
	if ($("#" + i)) {
		var v = base64_decode(v);
		var code = '<video controls  style="width:415px;height:230px;">';
		code += "<source src=" + v + " type='video/mp4' />";
		code += "<source src=" + v + " type='video/ogg' />";
		code += "Your browser does not support HTML5 video.Please upgrade your browser.</video>";
		$("#" + i).html(code);
	}
}

function base64_decode(data) {
	//  discuss at: http://phpjs.org/functions/base64_decode/
	// original by: Tyler Akins (http://rumkin.com)
	// improved by: Thunder.m
	// improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	//    input by: Aman Gupta
	//    input by: Brett Zamir (http://brett-zamir.me)
	// bugfixed by: Onno Marsman
	// bugfixed by: Pellentesque Malesuada
	// bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	//   example 1: base64_decode('S2V2aW4gdmFuIFpvbm5ldmVsZA==');
	//   returns 1: 'Kevin van Zonneveld'
	//   example 2: base64_decode('YQ===');
	//   returns 2: 'a'

	var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
	var o1,
	    o2,
	    o3,
	    h1,
	    h2,
	    h3,
	    h4,
	    bits,
	    i = 0,
	    ac = 0,
	    dec = '',
	    tmp_arr = [];

	if (!data) {
		return data;
	}

	data += '';

	do {// unpack four hexets into three octets using index points in b64
		h1 = b64.indexOf(data.charAt(i++));
		h2 = b64.indexOf(data.charAt(i++));
		h3 = b64.indexOf(data.charAt(i++));
		h4 = b64.indexOf(data.charAt(i++));

		bits = h1 << 18 | h2 << 12 | h3 << 6 | h4;

		o1 = bits >> 16 & 0xff;
		o2 = bits >> 8 & 0xff;
		o3 = bits & 0xff;

		if (h3 == 64) {
			tmp_arr[ac++] = String.fromCharCode(o1);
		} else if (h4 == 64) {
			tmp_arr[ac++] = String.fromCharCode(o1, o2);
		} else {
			tmp_arr[ac++] = String.fromCharCode(o1, o2, o3);
		}
	} while (i < data.length);

	dec = tmp_arr.join('');

	return dec.replace(/\0+$/, '');
}

function changeVideo(i) {
	if ($("v_" + i)) {
		var vc = document.getElementById('vc_' + i).innerHTML
		var v = document.getElementById('v_' + i).value;
		var code = '<video controls  style="width:415px;height:230px;">';
		code += "<source src=" + v + " type='video/mp4' />";
		code += "<source src=" + v + " type='video/ogg' />";
		code += "Your browser does not support HTML5 video.Please upgrade your browser.</video>";
		document.getElementById('vc').innerHTML = vc;
		document.getElementById('v').innerHTML = code;
	}
}

function changeAudio(i) {
	if ($("v_" + i)) {
		var vc = document.getElementById('vc_' + i).innerHTML
		var v = document.getElementById('v_' + i).value;
		var code = '<video controls  style="width:350px;height:40px;">';
		code += "<source src=" + v + " type='video/mp4' />";
		code += "<source src=" + v + " type='video/ogg' />";
		code += "Your browser does not support HTML5 video.Please upgrade your browser.</video>";
		document.getElementById('vc').innerHTML = vc;
		document.getElementById('v').innerHTML = code;
	}
}

function changeVideo2(i, j) {
	if ($("v_" + i)) {
		var vc = document.getElementById('vc_' + i).innerHTML
		var v = document.getElementById('v_' + i).value;
		var code = '<video controls style="width:415px;height:230px;">';
		code += "<source src=" + v + " type='video/mp4' />";
		code += "<source src=" + v + " type='video/ogg' />";
		code += "Your browser does not support HTML5 video.Please upgrade your browser.</video>";
		document.getElementById('vc_' + i).innerHTML = vc;
		document.getElementById('v_' + j).innerHTML = code;
	}
}
/*
function vote(){
	var vvv = "Thank you for your valuable time";
	$("#tid").html("<b>" + vvv + "</b>");
}
function vote2() {
	var id = $("#poll_id").val();
	id = $.trim(id);
	if (id.length > 0) {
		var msg = $("#suggestion").val();
		msg = $.trim(msg);
		if (msg.length > 0) {
			var params = "id=" + id + "&suggestion=" + msg;
			jQuery.ajax({
				url : './home/postsuggestion',
				type : 'POST',
				dataType : 'json',
				data : params,
				success : function(data) {
					if (data.LOGIN_ERROR_CODE) {
						window.location.href = URL + "/site/login";
					}
					if (data.SUCCESS_MSG_CODE) {
						var vvv = $("#poll_msg").val();
						$("#tid").html("<b>" + vvv + "</b>");
					}

					if (data.ERROR_MSG_CODE) {
						var vvv = data.ERROR_MSG;
						$("#tid").html("<b>" + vvv + "</b>");
					}
				}
			});

		}
	}
}

*/



function vote(){
	var id = $("#suggestion").val();
	id = $.trim(id);
	if(id.length < 3){
		alert("Please your suggestions");
	}
	else{
		postvote();
		//var vvv = "Thank you for your valuable time";
		//$("#tid").html("<b>" + vvv + "</b>");
	}
}
function postvote() {
	var id = $("#poll_id").val();
	id = $.trim(id);
	if (id.length > 0) {
		var msg = $("#suggestion").val();
		msg = $.trim(msg);
		if (msg.length > 0) {
			var params = "id=" + id + "&suggestion=" + msg;
			jQuery.ajax({
				url : './home/postsuggestion',
				type : 'POST',
				dataType : 'json',
				data : params,
				success : function(data) {
					if (data.LOGIN_ERROR_CODE) {
						window.location.href = URL + "/site/login";
					}
					if (data.SUCCESS_MSG_CODE) {
						var vvv = $("#poll_msg").val();
						$("#tid").html("<b>" + vvv + "</b>");
					}

					if (data.ERROR_MSG_CODE) {
						var vvv = data.ERROR_MSG;
						$("#tid").html("<b>" + vvv + "</b>");
					}
				}
			});

		}
	}
}




function strip_tags(input, allowed) {
  //  discuss at: http://phpjs.org/functions/strip_tags/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Luke Godfrey
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  //    input by: Pul
  //    input by: Alex
  //    input by: Marc Palau
  //    input by: Brett Zamir (http://brett-zamir.me)
  //    input by: Bobby Drake
  //    input by: Evertjan Garretsen
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: Onno Marsman
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: Eric Nagel
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: Tomasz Wesolowski
  //  revised by: Rafał Kukawski (http://blog.kukawski.pl/)
  //   example 1: strip_tags('<p>Kevin</p> <br /><b>van</b> <i>Zonneveld</i>', '<i><b>');
  //   returns 1: 'Kevin <b>van</b> <i>Zonneveld</i>'
  //   example 2: strip_tags('<p>Kevin <img src="someimage.png" onmouseover="someFunction()">van <i>Zonneveld</i></p>', '<p>');
  //   returns 2: '<p>Kevin van Zonneveld</p>'
  //   example 3: strip_tags("<a href='http://kevin.vanzonneveld.net'>Kevin van Zonneveld</a>", "<a>");
  //   returns 3: "<a href='http://kevin.vanzonneveld.net'>Kevin van Zonneveld</a>"
  //   example 4: strip_tags('1 < 5 5 > 1');
  //   returns 4: '1 < 5 5 > 1'
  //   example 5: strip_tags('1 <br/> 1');
  //   returns 5: '1  1'
  //   example 6: strip_tags('1 <br/> 1', '<br>');
  //   returns 6: '1 <br/> 1'
  //   example 7: strip_tags('1 <br/> 1', '<br><br/>');
  //   returns 7: '1 <br/> 1'

  allowed = (((allowed || '') + '')
    .toLowerCase()
    .match(/<[a-z][a-z0-9]*>/g) || [])
    .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
    commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
  return input.replace(commentsAndPhpTags, '')
    .replace(tags, function($0, $1) {
      return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
    });
}
