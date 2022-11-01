

//A function to show the modal
function displayModal() {
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
}