const app = 'Markdown Interpreter'
const author = 'Ewilan Rivière'
const tailwind = require('../../tailwind.config')
const color = tailwind.theme.extend.colors.primary[600]
const description = 'To convert Markdown to HTML or HTML to Markdown!'

module.exports = {
  settings: {
    robots: 'index, follow',
    disallow: '',
    color,
    locale: 'en_US',
    lang: 'en',
    googleToken: process.env.GOOGLE_SITE_VERIFICATION_TOKEN,
  },
  tags: {
    title: app,
    titleTemplate: `%s · ${app}`,
    description,
    rating: 'general',
    keywords: ['markdown', 'html', 'converter'],
    author,
    publisher: app,
    copyright: 'MIT License',
    language: 'english',
    designer: author,
  },
  og: {
    type: 'website',
    siteName: app,
  },
  twitter: {
    creator: '@ewilanriviere',
    site: '@ewilanriviere',
    url: `https://twitter.com/ewilanriviere`,
  },
}
