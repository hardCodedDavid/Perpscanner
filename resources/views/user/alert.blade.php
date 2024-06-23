<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWebsocket Test</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</head>
<body>
    <h4>Test</h4>
</body>
<script>
    var pusher = new Pusher("<?php echo env('PUSHER_APP_KEY') ?>", {
        cluster: "<?php echo env('PUSHER_APP_CLUSTER'); ?>"
        // encrypted: true
    });

    var channel = pusher.subscribe('screener');
    // console.log("Subscribed to channel:", channel.name);

    channel.bind('test', function(data) {
        // Handle the updated data here
        // console.log("Received data:", data);
        console.log(data);
    });
</script>
</html>