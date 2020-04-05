<script type="text/javascript">
 function cancelevent() {
  window.location.href="users.php";
}

function validation(){

  var editcontact = document.getElementById('edit_contact').value;
  var btn = document.getElementById('save4');
  var wrning = document.getElementById('lblwarning1');
  var checkicon = document.getElementById('iconcheck1');
  var erroricon = document.getElementById('icontimes1');

  var editcontactpattern = /^(9)\d{9}/;

  if(editcontactpattern.test(editcontact)){
   document.getElementById('box').style.borderColor = '#3ec46d';
   btn.disabled = false;
   wrning.innerHTML="";
   checkicon.style.display = "block";
   erroricon.style.display = "none";
   
 }else{
  document.getElementById('box').style.borderColor = '#f14668';
  btn.disabled = true;
  wrning.innerHTML="INVALID NUMBER";
  checkicon.style.display = "none";
  erroricon.style.display = "block";
  
}

}
</script>
