<x-layout>
    <div class="container mx-auto p-8">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-8 text-center">Проекти</h1>

        <!-- Current Projects (Тековни) -->
        <h2 class="text-2xl font-bold mb-4">Тековни</h2>
        <div id="current-projects-section">
            @include('project.partials.current_projects')
        </div>

        <!-- Completed Projects (Завршени) -->
        <h2 class="text-2xl font-bold mt-12 mb-4">Завршени</h2>
        <div id="completed-projects-section">
            @include('project.partials.completed_projects')
        </div>
    </div>

    <!-- AJAX script for pagination -->
    <x-slot name="scripts">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            // Handle pagination clicks
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();

                let page = $(this).attr('href').split('page=')[1]; // Get the page number
                let type = $(this).closest('.pagination').data('type'); // Get the section (current or completed)

                fetchProjects(page, type);
            });

            // AJAX request to fetch paginated projects
            function fetchProjects(page, type) {
                $.ajax({
                    url: "?page=" + page + "&type=" + type, // Send the page and type in the request
                    type: 'GET',
                    success: function(response) {
                        // Check the project type and update the relevant section only
                        if (type === 'current') {
                            $('#current-projects-section').html(response); // Update current projects section
                        } else if (type === 'completed') {
                            $('#completed-projects-section').html(response); // Update completed projects section
                        }
                    },
                    error: function() {
                        alert('Error loading data. Please try again.');
                    }
                });
            }
        </script>

    </x-slot>


</x-layout>
