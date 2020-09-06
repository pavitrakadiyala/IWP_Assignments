function addFields(){
  // Number of inputs to create
  var number = document.getElementById("member").value;
  // Container <div> where dynamic content will be placed
  var container = document.getElementById("container");
  // Clear previous contents of the container
  while (container.hasChildNodes()) {
      container.removeChild(container.lastChild);
  }
  for (i=0;i<number;i++){
      // Append a node with a random text
      container.appendChild(document.createTextNode("Member " + (i+1)));
      // Create an <input> element, set its type and name attributes
      var input = document.createElement("input");
      input.type = "text";
      input.name = "member" + i;
      container.appendChild(input);
      // Append a line break 
      container.appendChild(document.createElement("br"));
  }
}

function validateform()
{ 
  var ran=Math.floor(Math.random() *100000000);
  var letters = /^[0-9]+$/;
    var name=document.myform.name.value; 
    if (name==null || name==""){  
      alert("Name can't be blank"); 
      return false; 
    }
    if(name.length>75){  
      alert("Maximum Length of name exceeded!");  
      return false;  
      } 
      var x= document.myform.member.value;
      if (x==null || x==""){  
        alert("Author can not be blank"); 
        return false; 
      }

      var c = document.myform.ISBN.value;
      var d = /^\d\d\d\d-\d-\d\d-\d\d\d\d\d\d-\d$/;
      if (c==null || c==""){
        alert("ISBN can't be blank");
        return false;  
      }
       if (!c.match(d))
      {
        alert( "The ISBN number entered is invalid!" );
        return false;
      } 

      var y = document.myform.strin.value;
      var s = y.length; 
          if (y==null || y==""){
            alert("Publisher can't be blank");
            return false;  
          }
          if((y).match(letters)){
            alert("Sorry! Publisher Only letters!");
            return false;  
          } 
          if(s>30){  
            alert("Maximum Length of publisher exceeded!");  
            return false;  
           } 
      var ed = document.myform.Editor.value;
               if (ed==null || ed==""){
                 alert("Editor can't be blank");
                 return false;  
               }
               if((ed).match(letters)){
                 alert("Sorry! Editor Only letters!");
                 return false;  
               }             
               var pr=document.myform.price.value;  
               if (pr==null || pr==""){  
                 alert("Price can't be blank"); 
                 return false;
                 }
               if (!pr.match(letters))
               {
                 alert( "The Price should be a number!" );
                 return false;
               } 
               var re= /^\d{1,2}\/\d{1,2}\/\d{4}$/;
               var dt=document.myform.date.value;
               if (dt==null || dt==""){  
                alert("Date can't be blank"); 
                return false;
                }
               if(!dt.match(re)){
                 alert("Date Format Wrong");
                 return false;
               }
                 else{
                   alert("Your Entry was made!");
                   localStorage.setItem("txt", name);
                   localStorage.setItem("textvalue1", c);
                   localStorage.setItem("text", ran);
                 }           
      }
