
const likeWrappers = document.querySelectorAll(".like-wrapper");

if (likeWrappers.length > 0) {

  likeWrappers.forEach(wrapper => {

    const checkbox = wrapper.querySelector(".check");

    if (!checkbox) return;

    const id = checkbox.id;

    const countEl = wrapper.parentElement.querySelector(`[data-id="${id}"]`);

    let likes = localStorage.getItem(id + "_count");
    likes = likes === null ? parseInt(countEl.innerText) : parseInt(likes);

    countEl.innerText = likes;

    if (localStorage.getItem(id) === "true") {
      checkbox.checked = true;
    }

    checkbox.addEventListener("change", () => {

      likes = checkbox.checked ? likes + 1 : likes - 1;

      localStorage.setItem(id, checkbox.checked);
      localStorage.setItem(id + "_count", likes);

      countEl.innerText = likes;
    });
  });
}