

function byTeam(select) {
    
    var sport_id = $(select).val();
    var selectedOption = select.options[select.selectedIndex];
    var isopponent = selectedOption.dataset.byteam;
    
    $("#for_team_id").html('<option value="" selected>Select team 1 first</option>');
    $.ajax({
        type: "get",
        url: "/admin/get-by-teams",
        data: {
            sport_id: sport_id
        },
        success: function (response) {
            if(isopponent == 0) {
                // $("#team2").hide();
                $("#team2").show();

            }else {
                $("#team2").show();
            }
            $("#by_team_id").html(`<option value="" selected>Select session first</option>`);
            response.teams.forEach(element => {
                $("#by_team_id").append(`
                        <option value="${element.id}" data-byteam="${isopponent}" data-sport-id="` + sport_id + `">${element.name}</option>
                    `);
            });
        }
    });
}
function forTeam(select) {
    var team_id = $(select).val();
    var selectedOption = select.options[select.selectedIndex];
    var sport_id = selectedOption.dataset.sportId;
    var isopponent = selectedOption.dataset.byteam;
    console.log(isopponent);
    if (isopponent == 1) {
        $.ajax({
            type: "get",
            url: "/admin/get-for-teams",
            data: {
                sport_id: sport_id,
                team_id: team_id,
            },
            success: function (data) {
                $("#for_team_id").html(`<option value="" selected>Select team 1 first</option>`);
                data.teams.forEach(element => {
                    $("#for_team_id").append(`
                    <option value="${element.id}">${element.name}</option>
                `);
                });
            }
        });
    }
}





