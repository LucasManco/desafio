function switchDiv(group , div) {
    closeGroup(group)
    content = document.getElementById(div)
    content.style.display = "block"
}
function closeGroup(groupName) {
    group = document.getElementsByClassName(groupName)
  for (var i = 0; i < group.length; i++) {
    group[i].style.display = "none"
  }
}

switchDiv('city-adress','vitoria')
switchDiv('box-car', 'palo')
