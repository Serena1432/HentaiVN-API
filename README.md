# HentaiVN API
This is small API that I made for getting contents from a Vietnamese website called HentaiVN.tv using PHP.
Currently this API only supports getting contents from this website, not making contents because I don't want to do it.

## Disclaimer
I'm not affiliated with HentaiVN.tv or its admin. I'm just an HentaiVN member and wants to make something for an easy use.
If anyone have an issue about this, feel free to post in the [Issues](https://github.com/LilShieru/HentaiVN-API/issues) part.

## Requirements
* PHP v7 or lower (Running on PHP v8 may cause some fatal errors).

## Documentation
### /GET `GetLatestComic.php`
**Request Parameters:** None

**Response Parameters:** An JSON array object containing comic list.
| Parameter | Type | Description |
| --- | --- | --- |
| `comic_link` | `string` | The link leading to that HentaiVN Comic. |
| `comic_name` | `string` | The comic name. |

**Response Examples:**
(Executed by my computer on May 30, 2021; 4:59 PM (GMT+7))
```json
[
  {
    "comic_link": "https://hentaivn.tv/20884-doc-truyen-chuyen-hoc-da-ngoai-loi-cho-toi.html",
    "comic_name": "Chuyến học dã ngoại lợi cho tôi - Ch. 18"
  },
  {
    "comic_link": "https://hentaivn.tv/24347-doc-truyen-shiawase-no-daishou.html",
    "comic_name": "Shiawase no Daishou - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24342-doc-truyen-hundred-sweet-chocolates.html",
    "comic_name": "Hundred Sweet Chocolates - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24352-doc-truyen-gacha-girl-pp.html",
    "comic_name": "Gacha Girl PP - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24325-doc-truyen-the-daughter-of-the-big-sister-i-long-for-is-cute.html",
    "comic_name": "The Daughter of The Big Sister I long for is Cute - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24351-doc-truyen-quyen-ru-hang-xom-day-la-chuyen-da-xay-ra-voi-nguoi-me-hang-xom.html",
    "comic_name": "Quyến rũ hàng xóm: Đây là chuyện đã xảy ra với người mẹ hàng xóm - Chap 1"
  },
  {
    "comic_link": "https://hentaivn.tv/24350-doc-truyen-because-i-got-here-first.html",
    "comic_name": "BECAUSE I GOT HERE FIRST - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24349-doc-truyen-ienai-～erika～.html",
    "comic_name": "Ienai ～erika～ - Oneshot"
  },
  {
    "comic_link": "https://hentaivn.tv/24289-doc-truyen-saimin-youmuin.html",
    "comic_name": "Saimin Youmuin - Chap 3"
  },
  {
    "comic_link": "https://hentaivn.tv/24346-doc-truyen-rem-wa-kyou-zettai-yaritai-re-zero-kara-hajimeru-isekai-seikatsu.html",
    "comic_name": "Rem wa Kyou Zettai Yaritai! (Re:Zero kara Hajimeru Isekai Seikatsu) - Oneshot"
  }
]
```
