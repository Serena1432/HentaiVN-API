# HentaiVN API
This is small API that I made for getting contents from a Vietnamese website called HentaiVN.tv using PHP.
Currently this API only supports getting contents from this website, not making contents because I don't want to do it.

## Disclaimer
I'm not affiliated with HentaiVN.tv or its admin. I'm just an HentaiVN member and wants to make something for an easy use.
If anyone have an issue about this, feel free to post in the [Issues](https://github.com/LilShieru/HentaiVN-API/issues) part.

## Requirements
* PHP v7 or lower (Running on PHP v8 may cause some fatal errors).

## Documentation

### /GET `GetAuthorInfo.php`

**Description:** Get the full information of an author.

**Request Parameters:** JSON, form-urlencoded or queries from URL contains this parameter:
| Parameter | Type | Optional | Description |
| --- | --- | --- | --- |
| `name` | `string` | No | The author name you want to get information |
| `page` | `string/integer` | Yes | The page number you want to get comics |

**Response Parameters:** An JSON object containing author information
| Parameter | Type | Description |
| --- | --- | --- |
| `error` | `string` | The API error (`undefined` if none) |
| `display_name` | `string` | The author's display name. |
| `comics` | `array(object)` | The comic list array. |
| `comics.comic_name` | `string` | The comic name. |
| `comics.comic_link` | `string` | The link leading to the comic. |
| `comics.tags` | `array(string)` | Array list of the comic tags. |

**Response Examples:**
(Executed with this parameter: `name=Tamano Kedama`)
```json
{
  "display_name": "Tamano Kedama",
  "comics": [
    {
      "tags": [
        "BlowJobs",
        "Breast Sucking",
        "DevilGirl",
        "Femdom",
        "Không che",
        "Loli",
        "Nakadashi",
        "Series",
        "Small Boobs",
        "Stockings",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/23952-doc-truyen-no-le-cua-tieu-succubus.html",
      "comic_name": "Nô Lệ Của Tiểu Succubus - Chap 2 [Không Che!]"
    },
    {
      "tags": [
        "HentaiVN",
        "Không che",
        "Loli",
        "Oneshot",
        "Small Boobs",
        "Twintails",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/22850-doc-truyen-papakatsu-de-deatta-ko-ga-inma-kamo-shirenai.html",
      "comic_name": "Papakatsu de Deatta Ko ga Inma kamo Shirenai - Oneshot (Không che)"
    },
    {
      "tags": [
        "BlowJobs",
        "Che nhiều",
        "DevilGirl",
        "Femdom",
        "Humiliation",
        "Loli",
        "Nakadashi",
        "Small Boobs",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/14312-doc-truyen-chu-chu-drain.html",
      "comic_name": "Chu Chu Drain - Mang series quay lại"
    },
    {
      "tags": [
        "Ahegao",
        "BlowJobs",
        "Breast Sucking",
        "Dark Skin",
        "Demon",
        "DemonGirl",
        "Fantasy",
        "Femdom",
        "Full Color",
        "Group",
        "HentaiVN",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Romance",
        "Small Boobs",
        "Twintails",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/21280-doc-truyen-suoi-nuoc-nong-lilith.html",
      "comic_name": "Suối nước nóng Lilith - Oneshot full màu Art phê"
    },
    {
      "tags": [
        "Big Boobs",
        "Big Penis",
        "BlowJobs",
        "Breast Sucking",
        "Comedy",
        "Ecchi",
        "Không che",
        "Old Man",
        "Oneshot",
        "Romance",
        "School Uniform",
        "SchoolGirl",
        "Teacher",
        "Tsundere",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/20070-doc-truyen-school-regulation-violation.html",
      "comic_name": "School Regulation Violation - Oneshot Không che"
    },
    {
      "tags": [
        "Ahegao",
        "Che ít",
        "Có che",
        "DogGirl",
        "Doujinshi",
        "Garter Belts",
        "Loli",
        "Mind Control",
        "Nakadashi",
        "Oneshot",
        "Sex Toys",
        "Small Boobs",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/17981-doc-truyen-majo-no-watashi-ga-saimin-nanka-ni-kakaru-wake-nai-desho-touhou-project.html",
      "comic_name": "Majo no Watashi ga Saimin nanka ni Kakaru wake Nai desho (Touhou Project) - Rì úp"
    },
    {
      "tags": [
        "Che ít",
        "Có che",
        "Doujinshi",
        "HentaiVN",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Small Boobs"
      ],
      "comic_link": "https://hentaivn.tv/18381-doc-truyen-con-sot-39-do-touhou-touhou-project.html",
      "comic_name": "Cơn Sốt 39 Độ (Touhou, Touhou Project) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Có che",
        "Doujinshi",
        "Garter Belts",
        "HentaiVN",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/18329-doc-truyen-karakuchi-patchouli-sama-touhou-touhou-project.html",
      "comic_name": "Karakuchi Patchouli-sama (Touhou, Touhou project) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "HentaiVN",
        "Loli",
        "Oneshot",
        "Vampire",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/18055-doc-truyen-dit-xoa-diu-be-flan-chan-de-thuong-touhou-project.html",
      "comic_name": "Địt xoa dịu bé Flan-chan dễ thương (Touhou Project) - Oneshot ngọt"
    },
    {
      "tags": [
        "BlowJobs",
        "DevilGirl",
        "Full Color",
        "Handjob",
        "HentaiVN",
        "Không che",
        "Loli",
        "Oneshot",
        "Pregnant",
        "Twintails"
      ],
      "comic_link": "https://hentaivn.tv/15927-doc-truyen-kedama-gyuunyuu-succubus.html",
      "comic_name": "Kedama Gyuunyuu [Succubus] - Oneshot (Full Màu + Không Che)"
    },
    {
      "tags": [
        "Có che",
        "Doujinshi",
        "Loli",
        "Oneshot",
        "Romance",
        "Small Boobs",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/14720-doc-truyen-erudo-ecchi-azur-lane.html",
      "comic_name": "Erudo Ecchi (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "HentaiVN",
        "Loli",
        "Oneshot",
        "Romance",
        "Small Boobs",
        "Stockings",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/14681-doc-truyen-eld-marriage-azur-lane.html",
      "comic_name": "Eld Marriage (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Loli",
        "Oneshot",
        "Romance",
        "Small Boobs",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/14624-doc-truyen-eld-marriage-azur-lane.html",
      "comic_name": "Eld Marriage (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "Big Ass",
        "Big Boobs",
        "Catgirls",
        "Cosplay",
        "Fingering",
        "Không che",
        "Nakadashi",
        "Oneshot",
        "Romance",
        "Stockings",
        "Vanilla",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/12600-doc-truyen-tama-cau-xin-anh-di.html",
      "comic_name": "Tama! Cầu xin anh đi! - Oneshot [Không Che]"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Loli",
        "Oneshot",
        "Small Boobs",
        "Vampire"
      ],
      "comic_link": "https://hentaivn.tv/12258-doc-truyen-flanex-touhou-project.html",
      "comic_name": "FLANEX (Touhou Project) - Oneshot"
    }
  ]
}
```

### /GET `GetFullUserInfo.php`

**Description:** Get the full information of an user.

**Request Parameters:** JSON, form-urlencoded or queries from URL contains this parameter:
| Parameter | Type | Description |
| --- | --- | --- |
| `id` | `string` | The user ID you want to get information |

**Response Parameters:** An JSON object containing user information
| Parameter | Type | Description |
| --- | --- | --- |
| `error` | `string` | The API error (`undefined` if none) |
| `display_name` | `string` | The user's display name. |
| `avatar` | `string` | The user's avatar URL. |
| `additional_information` | `string` | The user's additional information. |
| `group` | `string` | The user's joined group (`"none"` if none). |
| `gender` | `string` | The user's gender. |
| `birth_date` | `string` | The user's birth date. |
| `joined` | `string` | The user's joined date. |
| `comments` | `integer` | The user's posted comments. |
| `likes` | `integer` | The user's received likes. |
| `yen` | `integer` | The user's current Yen currency. |
| `introduction` | `string` | The user's introduction. |
| `latest_comic` | `string` | The user's latest comic (`false` if none). |
| `tags` | `array(string)` | The user's latest comic's tag list (`undefined` if none). |
| `comic_link` | `string` | The link leading to user's latest comic (`undefined` if none). |

**Response Examples:**
(Executed with this parameter: `id=108808`)
```json

```

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
