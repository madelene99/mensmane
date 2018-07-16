/* Article FructCode.com */
$( document ).ready(function() {


$("form").on("submit",function(){ 
    return false;
    sendAjaxFormDoc1('ajax_form1');
    sendAjaxFormDoc2('ajax_form2');
});

    $("#btn1").click(
		function(){
            console.log('4');
            sendAjaxFormDoc1('ajax_form1');
            //sendAjaxForm('ajax_form', 'http://vip.demenibu.com/tracker_api');
			console.log('5');
            return false; 
		}
	);
});

 
 

$( document ).ready(function() {
    $("#btn2").click(
        function(){
            sendAjaxFormDoc2('ajax_form2');
            //sendAjaxForm1('ajax_form1', 'http://vip.demenibu.com/tracker_api');
            console.log('3');return false; 
        }
    );
});

 

function sendAjaxFormDoc1(ajax_form1, url) {

    $.ajax({
        url:     "https://docs.google.com/forms/d/e/1FAIpQLSfK4DO9kRHVRbVX4o_rgy97YPYCsBq-FFeMIqMxDkK_Pt1DIA/formResponse", //url СЃС‚СЂР°РЅРёС†С‹ (action_ajax_form.php)
        type:     "GET", //РјРµС‚РѕРґ РѕС‚РїСЂР°РІРєРё
        dataType: "html", //С„РѕСЂРјР°С‚ РґР°РЅРЅС‹С…
        data: $("#form37553925").serialize(),  // РЎРµР°СЂРёР»РёР·СѓРµРј РѕР±СЉРµРєС‚
        success: function(response) { //Р”Р°РЅРЅС‹Рµ РѕС‚РїСЂР°РІР»РµРЅС‹ СѓСЃРїРµС€РЅРѕ
              console.log(response);
              window.location.href = "thanks/";

        },
        error: function(response) { // Р”Р°РЅРЅС‹Рµ РЅРµ РѕС‚РїСЂР°РІР»РµРЅС‹
            //window.location.href = "thank-you/index.html"
            window.location.href = "thanks/";
        }
    });

    }

function sendAjaxFormDoc2(ajax_form2, url) {

    $.ajax({
        url:     "https://docs.google.com/forms/d/e/1FAIpQLSfK4DO9kRHVRbVX4o_rgy97YPYCsBq-FFeMIqMxDkK_Pt1DIA/formResponse", //url СЃС‚СЂР°РЅРёС†С‹ (action_ajax_form.php)
        type:     "GET", //РјРµС‚РѕРґ РѕС‚РїСЂР°РІРєРё
        dataType: "html", //С„РѕСЂРјР°С‚ РґР°РЅРЅС‹С…
        data: $("#form37556622").serialize(),  // РЎРµР°СЂРёР»РёР·СѓРµРј РѕР±СЉРµРєС‚
        success: function(response) { //Р”Р°РЅРЅС‹Рµ РѕС‚РїСЂР°РІР»РµРЅС‹ СѓСЃРїРµС€РЅРѕ
              console.log(response);
            //  window.location.href = "thank-you/index.html"
            window.location.href = "thanks/";

        },
        error: function(response) { // Р”Р°РЅРЅС‹Рµ РЅРµ РѕС‚РїСЂР°РІР»РµРЅС‹
            //window.location.href = "thank-you/index.html"
            window.location.href = "thanks/";
        }
    });

    }


