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

**Description:** Get 10 latest comics from the website.

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

### /GET `GetLatestTopic.php`

**Description:** Get 10 latest topics from the website forum.

**Request Parameters:** None

**Response Parameters:** An JSON array object containing topic list.
| Parameter | Type | Description |
| --- | --- | --- |
| `topic_type` | `string` | The topic type. |
| `topic_link` | `string` | The link leading to that HentaiVN Forum Topic. |
| `topic_name` | `string` | The topic name. |

**Response Examples:**
(Executed by my computer on May 30, 2021; 5:10 PM (GMT+7))
```json
[
  {
    "topic_type": "Bounty",
    "topic_link": "https://hentaivn.tv/forum/t47681-seisai-ryoku-no-takai-7.html#196",
    "topic_name": "Seisai-ryoku no Takai 7"
  },
  {
    "topic_type": "Tìm truyện",
    "topic_link": "https://hentaivn.tv/forum/t47680-tan-the.html#710",
    "topic_name": "Tận thế!"
  },
  {
    "topic_type": "Danh Hiệu",
    "topic_link": "https://hentaivn.tv/forum/t42076-trao-tang-danh-hieu-bbcon-cho-akai.html#980",
    "topic_name": "Trao tặng Danh Hiệu \"BBcon\" cho Akai"
  },
  {
    "topic_type": "Thảo luận",
    "topic_link": "https://hentaivn.tv/forum/t47668-ngung-dang-anh-18--de-hentaivn-khong-bi-chan.html#341",
    "topic_name": "Ngừng Đăng Ảnh 18+ Để HentaiVN Không Bị Chặn!"
  },
  {
    "topic_type": "Waifu",
    "topic_link": "https://hentaivn.tv/forum/t47679-ban-trung-xanh-sieu-dep-re-hon-lan-trc-toi-400-yen-.html#487",
    "topic_name": "Bán trứng xanh siêu đẹp, rẻ hơn lần trc tới 400 yên"
  },
  {
    "topic_type": "Hình Ảnh 18+",
    "topic_link": "https://hentaivn.tv/forum/t40466-xa-kho-part-2-.html#619",
    "topic_name": "Xả kho part 2"
  },
  {
    "topic_type": "Mua bán/Hợp tác",
    "topic_link": "https://hentaivn.tv/forum/t47662-can-editor-pzo.html#653",
    "topic_name": "cần editor pzo"
  },
  {
    "topic_type": "Hình Ảnh 18+",
    "topic_link": "https://hentaivn.tv/forum/t46341-lan-dau-gop-vui-cho-anh-em.html#507",
    "topic_name": "Lần đầu góp vui cho anh em"
  },
  {
    "topic_type": "Bounty",
    "topic_link": "https://hentaivn.tv/forum/t46975-chinpou-ni-ai-o-komete.html#430",
    "topic_name": "Chinpou ni Ai o Komete"
  },
  {
    "topic_type": "Hình Ảnh 18+",
    "topic_link": "https://hentaivn.tv/forum/t47558-bac-nao-co-may-anh-chay-nuoc-giong-kia-thi-cho-tui-voi.html#299",
    "topic_name": "Bác nào có mấy ảnh chảy nước giống kia thì cho tụi với"
  }
]
```
