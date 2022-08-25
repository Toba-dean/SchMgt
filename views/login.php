<div class="container-fluid">
  <?php

  use app\core\form\Form;

  $form = Form::Begin('', "post");

  ?>
  <div 
    style="width: 100%; max-width: 340px; margin-top: 100px;"
    class="mx-auto shadow rounded p-4"
  >
    <h2 class='text-center'>My School</h2>
    <img 
      src="/images/logo1.png" 
      alt="logo image"
      class="d-block mx-auto rounded-circle border border-primary mb-3"
      style="width: 100px;"
    >
    <h3>Login</h3>

    <?php

      echo $form->field($model, 'email')->emailField();
      echo $form->field($model, 'password')->passwordField();
    ?>
  <?php

    echo Form::End();

  ?>

   <button class="btn btn-primary">Login</button>

</div>

<!-- <div class="container-fluid">
  <form method="post" action="">
    <div 
      style="width: 100%; max-width: 340px; margin-top: 100px;"
      class="mx-auto shadow rounded p-4"
    >
      <h2 class='text-center'>My School</h2>
      <img 
        src="/images/logo1.png" 
        alt="logo image"
        class="d-block mx-auto rounded-circle border border-primary"
        style="width: 100px;"
      >
      <h3>Login</h3>
      <input 
        type="email" 
        name="email" 
        placeholder="Enter Email" 
        class="form-control mb-4 p-2"
        autofocus
      >
      <input 
        type="password" 
        name="password" 
        placeholder="Enter Password"
        class="form-control mb-4 p-2"
      >
      <button class="btn btn-primary">Login</button>
    </div>
  </form>
</div> -->