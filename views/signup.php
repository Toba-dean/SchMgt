<div class="container-fluid">
  <?php

  use app\core\form\Form;
  use app\core\form\Select;

  $form = Form::Begin('', "post");

  ?>
  <div 
    style="width: 100%; max-width: 340px; margin-top: 15px;"
    class="mx-auto shadow rounded p-4"
  >
    <h2 class='text-center'>My School</h2>
    <img 
      src="/images/logo1.png" 
      alt="logo image"
      class="d-block mx-auto rounded-circle border border-primary mb-3"
      style="width: 100px;"
    >
    <h3>Add User</h3>

    <?php
      echo $form->field($model, 'first_name');
      echo $form->field($model, 'last_name');
      echo $form->field($model, 'email')->emailField();

      $select = Select::Begin('gender', $model);

        echo $select->field('', "--Select a Gender--");
        echo $select->field('male', "Male");
        echo $select->field('female', "Female");

      echo Select::End();

      $select = Select::Begin('rank', $model);

        echo $select->field('', "--Select a Rank---");
        echo $select->field('student', "Student");
        echo $select->field('receptionist', "Receptionist");
        echo $select->field('lecturer', "Lecturer");
        echo $select->field('admin', "Admin");
        echo $select->field('super_admin', "Super Admin");

      echo Select::End();

      echo $form->field($model, 'password')->passwordField();
      echo $form->field($model, 'confirm_password')->passwordField();
    ?>

    <button class="btn btn-primary float-end">Create User</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
  </div>
  <!-- <div 
      style="width: 100%; max-width: 340px; margin-top: 15px;"
      class="mx-auto shadow rounded p-4"
    >
      <h2 class='text-center'>My School</h2>
      <img 
        src="/images/logo1.png" 
        alt="logo image"
        class="d-block mx-auto rounded-circle border border-primary"
        style="width: 100px;"
      >
      <h3>Add User</h3>
      <input 
        type="text" 
        name="first_name" 
        placeholder="Enter First Name"
        class="form-control mb-4 p-2"
        autofocus
      >
      <input 
        type="text" 
        name="last_name" 
        placeholder="Enter Last Name"
        class="form-control mb-4 p-2"
        autofocus
      >
      <input 
        type="email" 
        name="email" 
        placeholder="Enter Email"
        class="form-control mb-4 p-2"
        autofocus
      >
      <select class="my-2 form-control" name="gender">
        <option value=""> --Select a Gender-- </option>
        <option value="male"> Male</option>
        <option value="female"> Female </option>
      </select>
      <select class="my-2 form-control" name="rank">
        <option value=""> --Select a Rank-- </option>
        <option value="student"> Student </option>
        <option value="receptionist"> Receptionist </option>
        <option value="lecturer"> Lecturer </option>
        <option value="admin"> Admin </option>
        <option value="super_admin"> Super Admin </option>
      </select>
      <input 
        type="password" 
        name="password" 
        placeholder="Enter Password"
        class="form-control mb-4 p-2"
      >
      <input 
        type="password" 
        name="confirm_password" 
        placeholder="Confirm Password"
        class="form-control mb-4 p-2"
      >
      <button class="btn btn-primary float-end">Create User</button>
      <button type="reset" class="btn btn-danger">Cancel</button>
    </div> -->
  <?php

  echo Form::End();

  ?>
</div>