function switchDiv(group, div) {
    closeGroup(group)
    content = document.getElementById(div)
    content.style.display = "block"
    if (group === 'box-car') {
        hidden_id = 'modelo'
    } else if (group === 'city-adress') {
        hidden_id = 'cidade'
    }
    hidden = document.getElementById(hidden_id)
    if (hidden) {
      hidden.value = div
    }
}

function closeGroup(groupName) {
    group = document.getElementsByClassName(groupName)
    for (var i = 0; i < group.length; i++) {
        group[i].style.display = "none"
    }
}

switchDiv('city-adress', 'vitoria')
switchDiv('box-car', 'polo')
