require('dotenv').config()

export default (meta) => {
  return [
    {
      path: '/sitemaps/sitemap.xml',
      exclude: ['**'],
      routes() {
        return getRoutes()
      },
    },
  ]
}

const getRoutes = () => {
  return new Promise((resolve, reject) => {
    const routes = []
    const staticRoutes = [
      {
        url: '',
        changefreq: 'weekly',
        priority: 1,
      },
      {
        url: 'html-to-markdown',
        changefreq: 'weekly',
        priority: 1,
      },
      {
        url: 'markdown-to-html',
        changefreq: 'weekly',
        priority: 1,
      },
    ]
    staticRoutes.forEach((route) => {
      routes.push(route)
    })
    routes.concat(staticRoutes)

    resolve(routes)
  })
}
