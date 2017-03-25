var img  = document.querySelector('img');

    var lastClickedLi = null;

    // --- обработчики ---

    ul.onclick = function(event) {
      var target = event.target;

      // возможно, клик был внутри списка UL, но вне элементов LI
      if (target.tagName != "LI") return;

      // для Mac проверяем Cmd, т.к. Ctrl + click там контекстное меню
      if (event.metaKey || event.ctrlKey) {
        toggleSelect(target);
      } else if (event.shiftKey) {
        selectFromLast(target);
      } else {
        selectSingle(target);
      }

      lastClickedLi = target;
    }

    ul.onmousedown = function() {
      return false;
    };