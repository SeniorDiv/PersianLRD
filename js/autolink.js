window.onload = function(){
var links = document.getElementsByTagName("a");
for(a in links){
  var thisLink = links[a].href.split("/")[2];
  if(thisLink.indexOf(window.location.hostname) == -1){
    links[a].href = "http://go.mc-realm.ir/index.php?url=" + links[a]; }
}}  