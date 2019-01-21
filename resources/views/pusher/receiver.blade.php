<!DOCTYPE html>
<html>
<head>
  <title>Pusher Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('9f371b52f6a12dbb3f81', {
      cluster: 'eu',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    // channel.bind('my-event', function(data) {
    //   alert(JSON.stringify(data));
    // });
    channel.bind('push-submitted', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>

  <ul>
      @foreach ($pushes as $push)
          <li>{{ $push->created_at}} : {{ $push->data}}</li>
      @endforeach
  </ul>
</body>
</html>