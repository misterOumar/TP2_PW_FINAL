   $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var searchTerm = $(this).val();

                // Requête AJAX
                $.ajax({
                    url: 'index.php?page=home&search=' + searchTerm,
                    method: 'GET',
                    success: function(data) {
                        // Mettre à jour la table avec les résultats
                        $('#contactTableBody').html(data);
                    },
                    error: function() {
                        console.log('Une erreur est survenue.');
                    }
                });
            });
        });