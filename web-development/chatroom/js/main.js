function add_msg(username, room_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("messages").innerHTML = this.responseText;
    }
  };
  var message = document.getElementById("msg_input").value;
  xhttp.open("POST", "logic/messagelogic.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(`username=${username}&message=${message}&room_id=${room_id}`);
}
