<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projects Form</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>


<body style="padding-top:40px;">

  {{-- @include('projects.list') --}}
  <div class="container" id="root" style="">

    <form class="" @submit.prevent="onSubmit" method="post" action="/create" @keydown="form.errors.clear($event.target.name)">

      {{ csrf_field() }}

      <div class="form-group has-danger">
        <input type="text" name="name" value="" class="form-element" placeholder="Enter the project's name" v-model="form.name" >
        <small class="form-text text-muted" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></small>
      </div>

      <div class="form-group has-danger">
        <textarea name="description" rows="3" cols="40" class="form-element" placeholder="Enter the project description" v-model="form.description"></textarea>
        <small class="form-text text-muted" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></small>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit" :disabled="form.errors.any()">Add</button>
      </div>

    </div>

  </form>



  <script type="text/javascript" src="https://unpkg.com/vue"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
