addEventListener('DOMContentLoaded', function(){

  httpRequest = new XMLHttpRequest();

  var dataString = "innerWidth="+window.innerWidth+"&innerHeight="+window.innerHeight;

  httpRequest.open('POST', 'uag_query/uag_query.php', true);
  httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  httpRequest.send(dataString);

});
