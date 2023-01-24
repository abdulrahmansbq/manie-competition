<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Codepen Challenge: Rise</title>
  <link rel="stylesheet" href="{{ asset('assets/leaderboard/style.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/app-5005f49e.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

</head>
<body>

<example-component></example-component>

<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js'></script>
<script src='{{ asset('build/assets/app-80d7076c.js') }}'></script>

</body>
</html>
<script>
    import ExampleComponent from "../../js/components/ExampleComponent";
    export default {
        components: {ExampleComponent}
    }
</script>
