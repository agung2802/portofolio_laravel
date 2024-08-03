<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .pembatas{
    
    border: 1px solid black;
    width: 100%;
    height: 1px;

  }
</style>
<body>
  <?php
    // // Get the POST data
    // $postData = file_get_contents('php://input');
    // $request = json_decode($postData, true);

    // // Check if localStorageData is set in the request
    // if (isset($request['id'])) {
    //     // Create a PHP variable with the value from localStorage
    //     $id_user = $request['id'];

    //     // Use the value as needed
    //     echo json_encode(['received' => $id_user]);
    // } else {
    //     echo json_encode(['error' => 'No data received']);
    // }

    // // $id == session('id_user');
    // $user = DB::table('user')->where('id', $request['id'])->first();
    // $kontak = DB::table('contact')->where('id_user', $request['id'])->first(); 
    // $skill = DB::table('skill')->where('id_user', $request['id'])->first();
    // $project = DB::table('project')->where('id_user', $request['id'])->first();
  ?>

  <div class="flex flex-row border-2 border-black" style=" display: flex; flex-direction: column; "">
    <h1 style="text-align: center; font-size: 30px">Agung Rizki Hermawan</h1>
    <p style="text-align: center">Bandung, Jawab Barat, Indonesia agungrizki2802@gmail.com in/agungrizkihermawan/ ig/agungrhhh</p>

    <div class="pembatas"></div>

    <p>OBJEKTIF</p>
    <div class="pembatas"></div>

    <p>I am a Frontend Developer proficient in diverse programming languages and a comprehensive understanding of software development principles, including data structures and algorithms. With a proven track record of collaborative teamwork and effective communication, I am able  to complete assigned tasks efficiently within given deadlines. Eager to embrace new challenges and committed to continual improvement to advance as a proficient developer.
    </p>

    <div class="pembatas"></div>

    <p>PROJEK</p>
    <div class="pembatas"></div>


    <strong>Website Administrator Human Resource Management System</strong>

    <div class="flex flex-row justify-between">
        <p>Pt.Padepokan 79 </p>
        <p>Agustus 2019 - Oktober 2019 </p>
    </div>

    <ul>
        <li>Implementing UserInterface from figma designs using ReactJs</li>
        <li>Integration RestfulAPI using axios</li>
        <li>Manage data JSON from RestfulAPI for applied on the website</li>
    </ul>

    <div class="pembatas"></div>


    <p>SKILL</p>
    <div class="pembatas"></div>


    <p><strong>Frontend: </strong> ReactJs, AngularJs, VueJs.</p>
    <p><strong>Backend: </strong> Express, NestJs, Springboot, Laravel.</p>


</div>
</body>
</html>