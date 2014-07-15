/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready( function(){
    //var $x = 11;
    //console.log($x);
    //alert($x);
    var $ecn_wordDispl= $("#ecn-wordsDispl");
    var $ecn_wordInput = $("#ecn-wordInput input");
    
    $ecn_wordInput.keyup(function(e){
        var $thisLength = $ecn_wordInput.val().length;
        console.log($thisLength);
        if($thisLength === 0){
            var $paceholer = $ecn_wordInput.attr('placeholder');
            $ecn_wordDispl.text($paceholer);
            console.log($ecn_wordInput.attr('placeholder'));
        } else {
            $ecn_wordDispl.text($ecn_wordInput.val());
        }
        
        var $testHeight = 0;
        var $testHeight2 = 0;
        $testHeight =$(".ecn-wordsDispl").height();
        $testHeight2 =$(".ecn-word").height();
        var $res = ($testHeight - $testHeight2)/2;
        console.log($res);
        $(".ecn-word").css({'top':$res});
    });
    

     
   
   
});

