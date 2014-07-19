/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready( function(){
    //var $x = 11;
    //console.log($x);
    //alert($x);
    var $ecn_wordDispl = $("#ecn-wordsDispl");
    var $ecn_wordInput = $("#ecn-wordInput input");
    
    var $ecn_wordText = $(".ecn-word");
    var $ecn_cardsDispl = $(".ecn-cardsDispl");

    //font-size main word ration 32/184 = 0.17
    var ratio = 0.17;
    //functin resize font-size
    var resizeFont = function(size,ratio, textObj){
        textObj.css({"font-size":Math.round(size*ratio)})
    };
    // center the text block for main Word;  $target, $wrapper
    var textVerticalCenter = function ($target, $wrapper){
            console.log($wrapper.height());
            //we resize font immediately
            resizeFont($wrapper.height(),ratio,$target);
            //console.log($target.height());
            var $testHeight = 0;
            var $testHeight2 = 0;
            $testHeight = $wrapper.height();
            $testHeight2 = $target.height();
            var $res = ($testHeight - $testHeight2)/2;
            console.log('hello '+$res);
            $target.css({'top':$res});
            return $wrapper.height();

    };

    var wordTextHeight = 0;
    wordTextHeight = textVerticalCenter($ecn_wordText,$ecn_cardsDispl);
    
    $ecn_wordInput.keyup(function(){
       textVerticalCenter($ecn_wordText,$ecn_cardsDispl); 
    });
   $( window ).resize(function(){
       textVerticalCenter($ecn_wordText,$ecn_cardsDispl); 
       //console.log('new font-size: '+Math.round(resizedHeight*0.17))
       //resizeFont(resizedHeight,ratio,$ecn_wordText);
    });

    

    
    //resizeFont(wordTextHeight,ratio,$ecn_wordText);
    
    //inputing of the text
    $ecn_wordInput.keyup(function(e){
        
        //pupulating word text with word of palceholder
        var $thisLength = $ecn_wordInput.val().length;
        //console.log($thisLength);
        if($thisLength === 0){
            var $paceholer = $ecn_wordInput.attr('placeholder');
            $ecn_wordDispl.text($paceholer);
            //console.log($ecn_wordInput.attr('placeholder'));
        } else {
            $ecn_wordDispl.text($ecn_wordInput.val());
        }
        

    });
    

     
   
   
});

