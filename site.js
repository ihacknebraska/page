const tabs = Array.from(document.querySelectorAll('[role="tab"]'));

function activateTab(tab) {
  tabs.forEach((currentTab) => {
    const panel = document.getElementById(currentTab.getAttribute('aria-controls'));
    const selected = currentTab === tab;

    currentTab.setAttribute('aria-selected', String(selected));
    currentTab.tabIndex = selected ? 0 : -1;

    if (panel) {
      panel.hidden = !selected;
    }
  });
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => activateTab(tab));
  tab.addEventListener('keydown', (event) => {
    const previousKeys = ['ArrowLeft', 'ArrowUp'];
    const nextKeys = ['ArrowRight', 'ArrowDown'];

    if (![...previousKeys, ...nextKeys, 'Home', 'End'].includes(event.key)) {
      return;
    }

    event.preventDefault();

    let nextIndex = index;

    if (previousKeys.includes(event.key)) {
      nextIndex = (index - 1 + tabs.length) % tabs.length;
    } else if (nextKeys.includes(event.key)) {
      nextIndex = (index + 1) % tabs.length;
    } else if (event.key === 'Home') {
      nextIndex = 0;
    } else if (event.key === 'End') {
      nextIndex = tabs.length - 1;
    }

    tabs[nextIndex].focus();
    activateTab(tabs[nextIndex]);
  });
});
