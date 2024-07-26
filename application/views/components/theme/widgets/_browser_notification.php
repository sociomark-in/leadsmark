<script>
    if( "Notification" in window){
        if (Notification.permission != 'granted') {
            Notification.requestPermission().then((res)=>{
                switch (res) {
                    case 'granted':
                        new Notification('New Notification')
                        break;
                    case 'denied':
                        console.log("Notification Access Denied!");
                        break;
                        
                    default:
                        console.log("Notification Permission Missing!");
                        break;
                }
            })
        }
    } else{
        console.log("Notification Not Supported");
    }
</script>