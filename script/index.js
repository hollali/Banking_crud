//function for pagination
function pagination(totalpages, currentpages) {
  var pagelist = "";
  if (totalpages > 1) {
    currentpages = parseInt(currentpages);
    pagelist += `<ul class="pagination justify-content-center">`;
    const prevClass = currentpages == 1 ? "disabled" : "";
    pagelist += `<li class="page-item${prevClass}"><a class="page-link" href="#"data-page="${
      currentpages - 1
    }">Previous</a></li>`;
    for (let p = 1; p <= totalpages; p++) {
      const activeClass = currentpages == p ? "active" : "";
      pagelist += `<li class="page-item${activeClass}"><a class="page-link" href="#"data-page="${p}">${p}</a></li>`;
    }

    const nextClass = currentpages == totalpages ? "disabled" : "";
    pagelist += `<li class="page-item${nextClass}"><a class="page-link" href="#"data-page="${
      currentpages + 1
    }">Next</a></li>`;
    pagelist += `</ul>`;
  }
  $("#pagination").html(pagelist);
}
