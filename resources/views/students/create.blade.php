@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Gelap</title>
</head>
<body style="background-color: #1e1e1e; color: #ffffff; font-family: Arial, sans-serif;">

  <form style="max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #444; border-radius: 6px; background-color: #2a2a2a;">
    
    <p style="margin-bottom: 15px;">
      <label for="name" style="display: block; margin-bottom: 5px;">Name</label>
      <input type="text" id="name" name="name" style="width: 100%; padding: 8px; border: 1px solid #666; border-radius: 4px; background-color: #1e1e1e; color: white;">
    </p>

    <p style="margin-bottom: 15px;">
      <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
      <input type="email" id="email" name="email" style="width: 100%; padding: 8px; border: 1px solid #666; border-radius: 4px; background-color: #1e1e1e; color: white;">
    </p>

    <p style="margin-bottom: 15px;">
      <label for="phone" style="display: block; margin-bottom: 5px;">Phone</label>
      <input type="tel" id="phone" name="phone" style="width: 100%; padding: 8px; border: 1px solid #666; border-radius: 4px; background-color: #1e1e1e; color: white;">
    </p>

    <p style="margin-top: 10px;">
      <button type="submit" style="padding: 6px 12px; background-color: #1e1e1e; color: #7ef27e; border: 1px solid #7ef27e; border-radius: 4px; cursor: pointer;">
        Save
      </button>
    </p>

  </form>

</body>
</html>
@endsection