<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  </head>


    <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <h1 style="font-size: 24px; color: #333333; text-align: center;">Message de contact</h1>
            <p style="font-size: 16px; color: #555555;"><strong>Name:</strong> {{ $details['name'] }}</p>
            <p style="font-size: 16px; color: #555555;"><strong>Email:</strong> {{ $details['email'] }}</p>
            <p style="font-size: 16px; color: #555555;"><strong>Email:</strong> {{ $details['subject'] }}</p>
            <p style="font-size: 16px; color: #555555;"><strong>Message:</strong></p>
            <p style="font-size: 16px; color: #555555; line-height: 1.5;">{{ $details['message'] }}</p>
        </div>
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</html>
