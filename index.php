<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Field Set</title>
</head>
<body onload="startTime()">
<!-- Button trigger modal -->
<div  style="padding:20px">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch
  </button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Personalia:</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: 1px solid black; border-radius: 17px;"></button>
        </div>
        <form style="padding: 10px;">

             <label for="fname">First name:</label>
             <input type="text" id="fname" name="fname" style="height: 21px;" required ><br><br>
             <label for="lname">Last name:</label>
             <input type="text" id="lname" name="lname" style="height: 21px;" required ><br><br>
             <label for="email">Email:</label>
             <input type="email" id="email" name="email" style="height: 21px;" required ><br><br>
             <label for="birthday">Birthday:</label>
             <input type="date" id="birthday" name="birthday" required ><br><br>
             <h5 id="txt"></h5>
             <label for="birthday">Time:</label>
             <input type="time" id="time" name="birthday" required ><br><br>
             <input type="submit" value="Submit">

              <input type="number" id="codeLength" placeholder="Code Length" min="1">
              <button onclick="generateRandomCode()">Generate Code</button>

    <p>Generated Code:</p>
    <div id="output"></div>

           </form>
      </div>
    </div>
  </div>

        
</body>
</html>