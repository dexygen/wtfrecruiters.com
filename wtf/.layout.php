<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>WTF Recruiters?  Tales of Incompetence and Malfeasance</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab&display=swap" rel="stylesheet">
  </head>
  
  <body class="flex">
    <div class="w-1/12 xl:w-1/6"></div>
    <div class="w-5/6 xl:w-2/3">
      <header class="flex flex-col items-center">
        <img src="../.assets/images/wtf.svg" class="inline-block">
        <section style="font-family: Poppins" 
            class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl flex flex-col items-center mt-3">
            <div>Tales of Recruiter</div>
            <div class="flex flex-col items-center md:flex-row">
              <span>Incompetence&nbsp;</span>
              <span>and Malfeasance</span>
            </div>
        </section>
      </header>
      <main class="mt-2">
        <article style="font-family: 'Antic Slab'" class="flex flex-col">
          <h1 style="font-family: 'Julee'" class="bg-black text-white text-3xl p-2 text-center">
            <?php include dirname($_SERVER['SCRIPT_FILENAME']) . "/article_title.php"; ?>
          </h1>
          <?php include dirname($_SERVER['SCRIPT_FILENAME']) . "/article_body.php"; ?>
        </article>
      </main>
    </div>
    <div class="w-1/12 xl:w-1/12"></div>
  </body>
</html>