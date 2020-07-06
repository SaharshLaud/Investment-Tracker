function myFunction() {
  var x = document.getElementById("mypass");
  if (x.type === "password") {
    x.type = "text";
  } 
  else {
    x.type = "password";
  }
}

function myFunction1() {
  var y = document.getElementById("myrepass");
      var z = document.getElementById("mypsw");

    
  if (y.type === "password" || z.type === "password") {
    y.type = "text";
      z.type="text";

  } 
    else {
    y.type = "password";
            z.type = "password";

  }
}
window.addEventListener("beforeunload", function () {
  document.body.classList.add("animate-out");
}); 

window.onscroll = function() 
 {
         scrollFunction()
 };

function scrollFunction() 
            {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 80) 
                {
                document.getElementById("navbar").style.padding = "15px 8px";
                document.getElementById("logo").style.fontSize = "30px";

                } 
                else 
                {
                document.getElementById("navbar").style.padding = "10px 8px";
                document.getElementById("logo").style.fontSize = "15px";
                document.getElementById("navbar").style.backgroundColor = "transparent";

            }
            }










