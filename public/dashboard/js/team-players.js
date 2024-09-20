
function players() {
    var sport_id = $("#sport_id").val();

    $.ajax({
        type: "get",
        url: "/admin/get-for-coach",
        data: {
            sport_id: sport_id,
        },
        success: function (data) {
            $("#coach_id").html('');
            if(data.teams == null){
                $("#coach_id").html(`<option value="" selected>Select sports first</option>`);
            } else {
                data.teams.forEach(element => {
                    $("#coach_id").append(`
                        <option value="${element.id}">${element.username}</option>
                    `);
                });

            }
        }
    });
}
