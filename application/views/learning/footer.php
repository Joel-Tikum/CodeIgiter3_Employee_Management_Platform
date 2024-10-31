<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>

<script>
	$(document).ready(function() {
		// DELETE warning alert
		$('.delete').click(function(e) {
			e.preventDefault();
			confirmDelete = confirm("You are about to delete a record. Are you sure to continue ??");
			if (confirmDelete) {
				var id = $(this).val();
				$.ajax({
					type: 'DELETE',
					url: 'employee/delete/' + id,
					success: function(response) {
						alert('The record was deleted successfully');
						window.location.reload();
					}
				});
			}
		});


		// Initializing DataTables
		$('#w-DataTable-1').DataTable({
			ordering: false,
			language: {
				paginate:{
					first:'',
					last:'',
					next : "Next",
					previous: "Previous",
					border:true,
				}
			}
		});

		// Initializing DataTables
		$('#w-DataTable-2').DataTable({
			ordering: false,
			language: {
				paginate:{
					first:'',
					last:'',
					next : "Next",
					previous: "Previous",
					border:true,
				}
			}
		});

		// Initializing DataTables
		$('#w-DataTable-3').DataTable({
			ordering: false,
			language: {
				paginate:{
					first:'',
					last:'',
					next : "Next",
					previous: "Previous",
					border:true,
				}
			}
		});

	});


	const container = document.getElementsByClassName('alert');
	setTimeout(() => {
        container[0].style.opacity = '0';
		  container[0].classList.add('d-none');
    }, 3000);


	 document.getElementById('button-search').addEventListener('click', function() {
        var searchQuery = document.getElementById('searchInput').value;
        console.log('Searching for: ' + searchQuery);

        // Simulating fetching search results (replace with actual API call)
        // This is just a sample - you would typically make an AJAX request here
        setTimeout(function() {
            // Simulated search results
            var searchResults = ['Dashboard', 'Workers', 'Tasks'];
            console.log('Search results:', searchResults);
        }, 1000); // Simulating a delay of 1 second (1000 milliseconds)
    });
</script>
</body>

</html>
