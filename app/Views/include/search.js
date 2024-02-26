<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to the search input and table body
        var searchInput = document.getElementById('searchInput');
        var tableBody = document.getElementById('tableBody');

        // Add an event listener to the search input
        searchInput.addEventListener('input', function() {
            // Get the search query
            var query = searchInput.value.toLowerCase();

            // Get all table rows
            var rows = tableBody.getElementsByTagName('tr');

            // Loop through each row and hide/show based on the search query
            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var cells = row.getElementsByTagName('td');
                var shouldShow = false;

                // Loop through each cell in the row
                for (var j = 0; j < cells.length; j++) {
                    var cellText = cells[j].textContent.toLowerCase();
                    if (cellText.includes(query)) {
                        shouldShow = true;
                        break;
                    }
                }

                // Set the display property based on the search result
                row.style.display = shouldShow ? '' : 'none';
            }
        });
    });
</script>