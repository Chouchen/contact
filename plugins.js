
// remap jQuery to $
(function($){

 $('input[type=text], input[type=email], textarea').tipsy({trigger: 'focus', gravity: 'w'});


$('#send').click(function(e){
	e.preventDefault();
	$.post('send.php', { msg: $('textarea[name=msg]').val(), name: $('input[name=name]').val(), email:  $('input[name=email]').val(), from: $('input[name=from]').val()}, function(data){if(data == 'ok'){$('#container').animate({left: '+=5000'}, 1500, 'swing', function(){$('#msgOK').fadeTo(1500, 1)});}else{$('#returnMsg').html('').append('error : '+data);}});
}); 



})(window.jQuery);



// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console){
    console.log( Array.prototype.slice.call(arguments) );
  }
};



// catch all document.write() calls
(function(doc){
  var write = doc.write;
  doc.write = function(q){ 
    log('document.write(): ',arguments); 
    if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
  };
})(document);


