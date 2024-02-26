<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set the duration in milliseconds (e.g., 3000 milliseconds = 3 seconds)
            const duration = 2000;

            // Function to dismiss the alert after a specified duration
            function dismissAlert(alertId) {
                setTimeout(() => {
                    const alertElement = document.getElementById(alertId);
                    if (alertElement) {
                        alertElement.style.display = 'none';
                    }
                }, duration);
            }

            // Call the function for each alert
            dismissAlert('updateAlert');
            dismissAlert('deleteAlert');
            dismissAlert('Alert');
            dismissAlert('error');

            
        });
</script>