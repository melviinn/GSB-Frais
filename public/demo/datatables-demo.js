// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
    language: {
      "decimal":        "",
      "emptyTable":     "Aucune donnée disponible",
      "info":           "Affichage de _END_ lignes",
      "infoEmpty":      "Affichage de 0 à 0 lignes",
      "infoFiltered":   "(Filtré à partir de _MAX_ lignes total)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Montrer _MENU_ lignes",
      "loadingRecords": "Chargement...",
      "processing":     "",
      "search":         "Rechercher:",
      "zeroRecords":    "Aucun enregistrement correspondant trouvé",
      "paginate": {
          "first":      "First",
          "last":       "Last",
          "next":       "Suivant",
          "previous":   "Précédent"
      },
      "aria": {
          "sortAscending":  ": Activer pour trier les colonnes ascendantes",
          "sortDescending": ": activer pour trier les colonnes descendantes"
      }
    }
  });
});


