$('#distributeBtn').on('click', function() {
    const numPeople = $('#numPeople').val();

    $.post('distribute.php', {
        people: numPeople
    }, function(data) {
        let output = '';
        data.forEach((row, i) => {
            output += `<strong>Person ${i + 1}:</strong> ${row.join(", ")}<br>`;
        });
        $('#result').html(output);
    }).fail(function(xhr) {
        const msg = xhr.responseJSON?.error || "Something went wrong!";
        $('#result').html("<span class='text-danger'>" + msg + "</span>");
    });
});
