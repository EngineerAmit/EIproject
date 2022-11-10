fetch('https://www.reddit.com/r/memes.json')
  .then(res => res.json())
  .then(res => res.data.children)
  .then(res => res.map(post => ({
      author: post.data.author,
      link: post.data.url,
      img: post.data.thumbnail,
      title: post.data.title,
    }))
  )

  .then(res => render(res))

let index=0
let img = document.querySelector('img')
let memes

function render(res) {
  memes = res;
  img.setAttribute("src", res[index].link)
  index = index < memes.length ? ++index : 0
}
