<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <title>Bulma Forms Example</title>
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
      <script src = "https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
   </head>

   <body>
      <section class = "section">
         <div class = "container">
         <span class = "title">
         Form Fields
         </span><br><br>
         <span class = "is-size-5">
         Input Fields
         </span>
         //field class container keeps the space between form control classes
         <div class = "field">
            <label class = "label">Name</label>
            //control class container wraps the form control classes
            <div class = "control">
               <input class = "input" type="text" placeholder="enter your name...">
            </div>
         </div>
         <div class = "field">
            <label class = "label">Email</label>
            <div class = "control">
               <input class = "input" type="email" placeholder="enter your email...">
            </div>
         </div>
         <br>
         <span class = "is-size-5">
         Dropdown Field
         </span>
         <div class = "field">
            <div class = "control">
               <div class = "select">
                  <select>
                     <option>Option One</option>
                     <option>Option Two</option>
                  </select>
               </div>
            </div>
         </div>
         <br>

         <span class = "is-size-5">
         Checkbox Field
         </span>
         <div class = "field">
            <div class = "control">
               <label class = "checkbox">
               <input type="checkbox">
               I agree to the <a href="#">terms and conditions</a>
               </label>
            </div>
         </div>
         <br>

         <span class = "is-size-5">
         Radio Button Fields
         </span>
         <div class = "field">
            <div class = "control">
               <label class = "radio">
               <input type="radio" name="question">
               Yes
               </label>
               <label class = "radio">
               <input type="radio" name="question">
               No
               </label>
            </div>
         </div>
         <span class = "is-size-5">
         Button Field
         </span>
         <div class = "field is-grouped">
            <div class = "control">
               <button class = "button is-link">Submit</button>
            </div>
         </div>
      </section>
   </body>
</html>
