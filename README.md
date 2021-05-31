# HentaiVN API
This is a small API that I made for getting contents from a Vietnamese website called HentaiVN.tv using PHP.
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

### /GET `GetCharacterInfo.php`

**Description:** Get the full information of a character.

**Request Parameters:** JSON, form-urlencoded or queries from URL contains this parameter:
| Parameter | Type | Optional | Description |
| --- | --- | --- | --- |
| `name` | `string` | No | The character name you want to get information |
| `page` | `string/integer` | Yes | The page number you want to get comics |

**Response Parameters:** An JSON object containing character information
| Parameter | Type | Description |
| --- | --- | --- |
| `error` | `string` | The API error (`undefined` if none) |
| `display_name` | `string` | The character's display name. |
| `comics` | `array(object)` | The comic list array. |
| `comics.comic_name` | `string` | The comic name. |
| `comics.comic_link` | `string` | The link leading to the comic. |
| `comics.tags` | `array(string)` | Array list of the comic tags. |

**Response Examples:**
(Executed with this parameter: `name=Nico Yazawa`)
```json
{
  "display_name": "Nico Yazawa",
  "comics": [
    {
      "tags": [
        "Breast Sucking",
        "Cunnilingus",
        "Doujinshi",
        "HentaiVN",
        "Oneshot",
        "Romance",
        "Vanilla",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/22812-doc-truyen-watashi-no-kuroi-bara-no-hime.html",
      "comic_name": "Watashi no Kuroi Bara no Hime - Oneshot"
    },
    {
      "tags": [
        "Doujinshi",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/16329-doc-truyen-maki-chan-ga-otoire-o-gaman-suru-ohanashi.html",
      "comic_name": "Maki-chan ga Otoire o Gaman suru Ohanashi - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Cheating",
        "Có che",
        "Doujinshi",
        "Fingering",
        "Idol",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Rape",
        "Sex Toys",
        "Small Boobs",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/15925-doc-truyen-nico-joku-love-live.html",
      "comic_name": "Nico Joku (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Anal",
        "BlowJobs",
        "Cosplay",
        "Doujinshi",
        "Fingering",
        "Full Color",
        "Harem",
        "HentaiVN",
        "Idol",
        "Không che",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Oral",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Swimsuit"
      ],
      "comic_link": "https://hentaivn.tv/14868-doc-truyen-ki-nghi-he-cua-nico-va-maki-love-live.html",
      "comic_name": "Kì nghỉ hè của Nico và Maki (Love Live!) - Oneshot (Full-Màu)"
    },
    {
      "tags": [
        "Ahegao",
        "BlowJobs",
        "Che ít",
        "Doujinshi",
        "Group",
        "Loli",
        "Mind Control",
        "Nakadashi",
        "Oneshot",
        "Rape",
        "Small Boobs",
        "Stockings",
        "Virgin"
      ],
      "comic_link": "https://hentaivn.tv/13920-doc-truyen-nico-live-love-live.html",
      "comic_name": "Nico-Live! (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Comedy",
        "Doujinshi",
        "Fingering",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/13729-doc-truyen-heart-throbbing-conversation-love-live.html",
      "comic_name": "Heart Throbbing Conversation (Love Live!) - OneShot"
    },
    {
      "tags": [
        "Doujinshi",
        "Oneshot",
        "Romance",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/13616-doc-truyen-baby-i-love-you-love-live.html",
      "comic_name": "BABY I LOVE YOU (Love Live!) - OneShot"
    },
    {
      "tags": [
        "Big Boobs",
        "Bloomers",
        "BlowJobs",
        "Có che",
        "Doujinshi",
        "Group",
        "Handjob",
        "Harem",
        "Mind Control",
        "Nakadashi",
        "School Uniform",
        "SchoolGirl",
        "Series",
        "Small Boobs",
        "Stockings",
        "Swimsuit"
      ],
      "comic_link": "https://hentaivn.tv/13012-doc-truyen-ore-yome-saimin-love-live.html",
      "comic_name": "Ore Yome Saimin (Love Live!) - Update Chap 3"
    },
    {
      "tags": [
        "Animal girl",
        "Che ít",
        "Che nhiều",
        "Comedy",
        "Doujinshi",
        "Group",
        "Oneshot",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/12679-doc-truyen-halloween-wonderland-love-live.html",
      "comic_name": "Halloween Wonderland (Love Live!) - One-shot"
    },
    {
      "tags": [
        "Ahegao",
        "Che ít",
        "Doujinshi",
        "Femdom",
        "Group",
        "Harem",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "Sex Toys",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/9280-doc-truyen-first-live-love-live.html",
      "comic_name": "First Live (Love Live!) - Oneshot [Re-up]"
    },
    {
      "tags": [
        "Big Boobs",
        "Che ít",
        "Doujinshi",
        "Fingering",
        "HentaiVN",
        "Idol",
        "Masturbation",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Stockings",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/10108-doc-truyen-love-white-love-live.html",
      "comic_name": "Love White (Love Live!) - One shot- [Yuri]"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Fingering",
        "Group",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/9545-doc-truyen-nicomaki-triangle-revenge-love-live.html",
      "comic_name": "NicoMaki Triangle Revenge (Love Live!) - One shot- [Yuri]"
    },
    {
      "tags": [
        "Che nhiều",
        "Doujinshi",
        "Fingering",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Stockings",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/9072-doc-truyen-nicomaki-kanshou-party-love-live.html",
      "comic_name": "NicoMaki Kanshou Party (Love Live!) - Oneshot [Yuri]"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Full Color",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Sex Toys",
        "Small Boobs",
        "Stockings",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/9023-doc-truyen-endless-love-kako-kara-no-present-love-live.html",
      "comic_name": "Endless Love ~Kako Kara no Present~ (Love Live!) - One shot- [Yuri]"
    },
    {
      "tags": [
        "Catgirls",
        "Che nhiều",
        "Doujinshi",
        "Fingering",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Stockings",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/8997-doc-truyen-nico-maki-nyan-nyan-hon-love-live.html",
      "comic_name": "Nico Maki Nyan Nyan Hon (Love Live!) - One shot- [Yuri]"
    }
  ]
}
```

### /GET `GetDoujinshiInfo.php`

**Description:** Get the full information of a doujinshi.

**Request Parameters:** JSON, form-urlencoded or queries from URL contains this parameter:
| Parameter | Type | Optional | Description |
| --- | --- | --- | --- |
| `name` | `string` | No | The doujinshi name you want to get information |
| `page` | `string/integer` | Yes | The page number you want to get comics |

**Response Parameters:** An JSON object containing doujinshi information
| Parameter | Type | Description |
| --- | --- | --- |
| `error` | `string` | The API error (`undefined` if none) |
| `display_name` | `string` | The doujinshi's display name. |
| `comics` | `array(object)` | The comic list array. |
| `comics.comic_name` | `string` | The comic name. |
| `comics.comic_link` | `string` | The link leading to the comic. |
| `comics.tags` | `array(string)` | Array list of the comic tags. |

**Response Examples:**
(Executed with this parameter: `name=Love Live!`)
```json
{
  "display_name": "Love Live!",
  "comics": [
    {
      "tags": [
        "Comedy",
        "Loli",
        "Non-hen",
        "School Uniform",
        "Sex Toys"
      ],
      "comic_link": "https://hentaivn.tv/23605-doc-truyen-sonoda-vibration-love-live.html",
      "comic_name": "Sonoda Vibration!! (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Anal",
        "Big Ass",
        "BlowJobs",
        "Dark Skin",
        "Double Penetration",
        "Drug",
        "Fingering",
        "Group",
        "Mind Break",
        "Nakadashi",
        "Rape",
        "Sex Toys"
      ],
      "comic_link": "https://hentaivn.tv/20020-doc-truyen-joshidaisei-kosaka-honoka-no-yaricir-jikenbo-love-live.html",
      "comic_name": "Joshidaisei Kosaka Honoka no YariCir Jikenbo (Love Live!) - Lâu lâu trồi lên"
    },
    {
      "tags": [
        "Che ít",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/19212-doc-truyen-stardust-melody.html",
      "comic_name": "Stardust Melody - Thanh tẩy tâm hồn nào"
    },
    {
      "tags": [
        "Có che",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Stockings",
        "Twintails"
      ],
      "comic_link": "https://hentaivn.tv/18947-doc-truyen-rubykan-love-copybon-love-live-sunshine.html",
      "comic_name": "RUBYKAN LOVE Copybon (Love Live! Sunshine!!) - Oneshot nhạt"
    },
    {
      "tags": [
        "Adult",
        "Breast Sucking",
        "Doujinshi",
        "HentaiVN",
        "Oneshot",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/18554-doc-truyen-bokura-no-love-live-15.html",
      "comic_name": "Bokura no Love Live! 15 - Oneshot"
    },
    {
      "tags": [
        "Big Boobs",
        "Doujinshi",
        "Full Color",
        "Harem",
        "Không che",
        "SchoolGirl",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/17969-doc-truyen-idol-100-naka-live-love-live.html",
      "comic_name": "Idol 100% Naka Live! (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Doujinshi",
        "Fingering",
        "Kuudere",
        "Loli",
        "Masturbation",
        "Oneshot",
        "Vanilla",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/17764-doc-truyen-sex-to-uso-to-yurikago-to-love-live.html",
      "comic_name": "Sex to Uso to Yurikago to (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Anal",
        "BBM",
        "Big Boobs",
        "Big Penis",
        "BlowJobs",
        "Condom",
        "Dark Skin",
        "Double Penetration",
        "Group",
        "Harem",
        "Mind Break",
        "Nakadashi",
        "Virgin"
      ],
      "comic_link": "https://hentaivn.tv/17672-doc-truyen-joshidaisei-minami-kotori-no-yaricir-jikenbo-case-4-love-live.html",
      "comic_name": "Joshidaisei Minami Kotori no YariCir Jikenbo Case.4 (Love Live!) - Hàng về"
    },
    {
      "tags": [
        "Doujinshi",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/16329-doc-truyen-maki-chan-ga-otoire-o-gaman-suru-ohanashi.html",
      "comic_name": "Maki-chan ga Otoire o Gaman suru Ohanashi - Oneshot"
    },
    {
      "tags": [
        "Anal",
        "Big Boobs",
        "BlowJobs",
        "Garter Belts",
        "Group",
        "Maids",
        "Sex Toys",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/16186-doc-truyen-maid-live-love-live.html",
      "comic_name": "Maid Live! (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Anal",
        "Big Boobs",
        "Bondage",
        "Group",
        "Hairy",
        "Mind Break",
        "Mind Control",
        "Rape",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/16167-doc-truyen-bad-end-heaven-4-love-live.html",
      "comic_name": "BAD END HEAVEN 4 (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Cheating",
        "Có che",
        "Doujinshi",
        "Fingering",
        "Idol",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Rape",
        "Sex Toys",
        "Small Boobs",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/15925-doc-truyen-nico-joku-love-live.html",
      "comic_name": "Nico Joku (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Anal",
        "BDSM",
        "Big Boobs",
        "BlowJobs",
        "Bondage",
        "Cheating",
        "Double Penetration",
        "Group",
        "Hairy",
        "Harem",
        "Mind Break",
        "Nakadashi",
        "NTR",
        "Sex Toys",
        "Sweating",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/15813-doc-truyen-joshidaisei-minami-kotori-no-yaricir-jikenbo-case-3-love-live.html",
      "comic_name": "Joshidaisei Minami Kotori no YariCir Jikenbo Case.3 (Love Live!) - Chap 3 có biến..."
    },
    {
      "tags": [
        "Blackmail",
        "BlowJobs",
        "Double Penetration",
        "Doujinshi",
        "Drug",
        "Group",
        "Harem",
        "Mind Break",
        "Nakadashi",
        "Rape",
        "Swimsuit",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/15502-doc-truyen-joshidaisei-minami-kotori-no-yaricir-jikenbo-case-2-love-live.html",
      "comic_name": "Joshidaisei Minami Kotori no YariCir Jikenbo Case.2 (Love Live!) - Phần 2 nóng cmn hổi :3"
    },
    {
      "tags": [
        "Ahegao",
        "Big Ass",
        "Big Boobs",
        "BlowJobs",
        "Condom",
        "Deepthroat",
        "Double Penetration",
        "Doujinshi",
        "Group",
        "Hairy",
        "Harem",
        "Mind Break",
        "Rape",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/15477-doc-truyen-joshidaisei-minami-kotori-no-yaricir-jikenbo-case-1-love-live.html",
      "comic_name": "Joshidaisei Minami Kotori no YariCir Jikenbo Case.1 (Love Live!) - Oneshot cực hot :3"
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
{
  "display_name": "Nico Levianth",
  "avatar": "https://i.postimg.cc/RCfX75Gq/ezgif-6-f1553896d410.gif",
  "additional_info": "\nNico Levianth\nCuồng Dâm\nBắt đầu bộc lộ bản chất dâm tà của mình.\n",
  "group": "none",
  "gender": "Nam",
  "birth_date": "20/2/2005",
  "joined": "01:18 - 17/05/2018",
  "comments": 1383,
  "likes": 2674,
  "yen": 1811,
  "introduction": "\n\n\n",
  "latest_comic": "Watashi ni XXX ga Haete Kita! (Watashi ni Tenshi ga Maiorita!) - Oneshot [Loli]",
  "tags": [
    "Catgirls",
    "Doujinshi",
    "Full Color",
    "Futanari",
    "Incest",
    "Không che",
    "Loli",
    "Oneshot",
    "Swimsuit",
    "Yuri"
  ],
  "comic_link": "https://hentaivn.tv/19035-doc-truyen-watashi-ni-xxx-ga-haete-kita-watashi-ni-tenshi-ga-maiorita.html"
}
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
| `topic_last_reply` | `string` | The topic's last replied user. |

**Response Examples:**
(Executed by my computer on May 30, 2021; 5:10 PM (GMT+7))
```json
[
  {
    "topic_type": "Báo cáo",
    "topic_link": "https://hentaivn.tv/forum/t47686-to-cao-thanh-vien-.html#428",
    "topic_name": "Tố cáo thành viên",
    "topic_last_reply": "vó ngựa thảo nguyên"
  },
  {
    "topic_type": "Thảo luận",
    "topic_link": "https://hentaivn.tv/forum/t47668-ngung-dang-anh-18--de-hentaivn-khong-bi-chan.html#304",
    "topic_name": "Ngừng Đăng Ảnh 18+ Để HentaiVN Không Bị Chặn!",
    "topic_last_reply": "user-221715"
  },
  {
    "topic_type": "Thảo luận",
    "topic_link": "https://hentaivn.tv/forum/t47688-dich-truyen-co-phi.html#216",
    "topic_name": "Dịch truyện có phí",
    "topic_last_reply": "❀ Tuệ An ❀"
  },
  {
    "topic_type": "Mua bán/Hợp tác",
    "topic_link": "https://hentaivn.tv/forum/t47690-mua-6k-yen.html#162",
    "topic_name": "Mua 6k yên",
    "topic_last_reply": "❀ Tuệ An ❀"
  },
  {
    "topic_type": "Mua bán/Hợp tác",
    "topic_link": "https://hentaivn.tv/forum/t47662-can-editor-pzo.html#915",
    "topic_name": "cần editor pzo",
    "topic_last_reply": "RienV"
  },
  {
    "topic_type": "Hỏi đáp",
    "topic_link": "https://hentaivn.tv/forum/t47687-lam-sao-de-kiem-yen-a.html#853",
    "topic_name": "Làm sao để kiếm yên ạ",
    "topic_last_reply": "Mellie Nataniel"
  },
  {
    "topic_type": "Mua bán/Hợp tác",
    "topic_link": "https://hentaivn.tv/forum/t44183-ban-yen-sang-card-vina.html#716",
    "topic_name": "BÁN YÊN SỐ LƯỢNG LỚN",
    "topic_last_reply": "Zerotwo"
  },
  {
    "topic_type": "Mua bán/Hợp tác",
    "topic_link": "https://hentaivn.tv/forum/t47518-ban-yen-giao-dich-qua-momo.html#440",
    "topic_name": "Bán yên giao dịch qua momo",
    "topic_last_reply": "Zerotwo"
  },
  {
    "topic_type": "Nhờ dịch free",
    "topic_link": "https://hentaivn.tv/forum/t47689-nho-dich-truyen.html#022",
    "topic_name": "Nhờ dịch truyện",
    "topic_last_reply": "Donald Trump"
  },
  {
    "topic_type": "Tìm truyện",
    "topic_link": "https://hentaivn.tv/forum/t45196-tim-truyen-ngot-.html#587",
    "topic_name": "Tìm truyện ngọt....",
    "topic_last_reply": "zukitata03"
  }
]
```

### /GET `GetAuthorInfo.php`

**Description:** Get the full information of an author.

**Request Parameters:** JSON, form-urlencoded or queries from URL contains this parameter:
| Parameter | Type | Optional | Description |
| --- | --- | --- | --- |
| `query` | `string` | No | The search query string |
| `page` | `string/integer` | Yes | The page number you want to search for |

**Response Parameters:** An JSON object containing author information
| Parameter | Type | Description |
| --- | --- | --- |
| `error` | `string` | The API error (`undefined` if none) |
| `display_name` | `string` | Search result's display name to ensure that no error happens. |
| `comics` | `array(object)` | The comic list array. |
| `comics.comic_name` | `string` | The comic name. |
| `comics.comic_link` | `string` | The link leading to the comic. |
| `comics.tags` | `array(string)` | Array list of the comic tags. |

**Response Examples:**
(Executed with this parameter: `query=Nico`)
```json
{
  "display_name": "Nico",
  "comics": [
    {
      "tags": [
        "Brother",
        "Che nhiều",
        "Có che",
        "Doujinshi",
        "Fingering",
        "Imouto",
        "Loli",
        "Oneshot",
        "Pantyhose",
        "School Uniform",
        "SchoolGirl",
        "Sex Toys",
        "Small Boobs",
        "Twintails",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/23541-doc-truyen-unicorn-da-lam-het-suc-ngay-ca-khi-o-trong-khach-san.html",
      "comic_name": "Unicorn, đã làm hết sức, ngay cả khi ở trong khách sạn - Oneshot"
    },
    {
      "tags": [
        "BlowJobs",
        "Cunnilingus",
        "Doujinshi",
        "Femdom",
        "HentaiVN",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Pantyhose",
        "Pregnant",
        "Yandere"
      ],
      "comic_link": "https://hentaivn.tv/22305-doc-truyen-together-with-unicorn-azur-lane.html",
      "comic_name": "Together with Unicorn (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "BlowJobs",
        "Che ít",
        "Cunnilingus",
        "Doujinshi",
        "Loli",
        "Oneshot",
        "Oral",
        "Small Boobs",
        "Stockings",
        "Virgin",
        "X-ray"
      ],
      "comic_link": "https://hentaivn.tv/18219-doc-truyen-tottemo-waruiko-unicorn-azur-lane.html",
      "comic_name": "Tottemo Waruiko Unicorn (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "Ahegao",
        "Brocon",
        "Brother",
        "Doujinshi",
        "Loli",
        "Oneshot",
        "Sister",
        "Stockings",
        "Twintails",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/15954-doc-truyen-unicorn-yeu-onii-chan-nhieu-lam-azur-lane.html",
      "comic_name": "Unicorn yêu Onii-chan nhiều lắm! (Azur Lane) - Oneshot ngắn"
    },
    {
      "tags": [
        "Ahegao",
        "Cheating",
        "Có che",
        "Doujinshi",
        "Fingering",
        "Idol",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Rape",
        "Sex Toys",
        "Small Boobs",
        "Stockings"
      ],
      "comic_link": "https://hentaivn.tv/15925-doc-truyen-nico-joku-love-live.html",
      "comic_name": "Nico Joku (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Anal",
        "BlowJobs",
        "Cosplay",
        "Doujinshi",
        "Fingering",
        "Full Color",
        "Harem",
        "HentaiVN",
        "Idol",
        "Không che",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Oral",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Swimsuit"
      ],
      "comic_link": "https://hentaivn.tv/14868-doc-truyen-ki-nghi-he-cua-nico-va-maki-love-live.html",
      "comic_name": "Kì nghỉ hè của Nico và Maki (Love Live!) - Oneshot (Full-Màu)"
    },
    {
      "tags": [
        "Ahegao",
        "BlowJobs",
        "Che ít",
        "Doujinshi",
        "Group",
        "Loli",
        "Mind Control",
        "Nakadashi",
        "Oneshot",
        "Rape",
        "Small Boobs",
        "Stockings",
        "Virgin"
      ],
      "comic_link": "https://hentaivn.tv/13920-doc-truyen-nico-live-love-live.html",
      "comic_name": "Nico-Live! (Love Live!) - Oneshot"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Fingering",
        "Oneshot",
        "Small Boobs",
        "Stockings",
        "Vanilla"
      ],
      "comic_link": "https://hentaivn.tv/13901-doc-truyen-unicorn-ecchi-azur-lane.html",
      "comic_name": "Unicorn Ecchi (Azur Lane) - One shot"
    },
    {
      "tags": [
        "Anal",
        "Big Penis",
        "BlowJobs",
        "Che ít",
        "Cheating",
        "Double Penetration",
        "Doujinshi",
        "GangBang",
        "Group",
        "Handjob",
        "Mind Break",
        "Nakadashi",
        "NTR",
        "Oneshot",
        "Oral",
        "Pregnant",
        "Rape",
        "Small Boobs",
        "Stockings",
        "Virgin"
      ],
      "comic_link": "https://hentaivn.tv/13900-doc-truyen-toi-muon-bat-nat-mot-be-unicorn-trong-trang-azur-lane.html",
      "comic_name": "Tôi muốn bắt nạt một bé Unicorn trong trắng (Azur Lane) - One shot"
    },
    {
      "tags": [
        "BlowJobs",
        "Che ít",
        "Full Color",
        "Group",
        "Oneshot",
        "Oral",
        "Rape"
      ],
      "comic_link": "https://hentaivn.tv/11282-doc-truyen-nicopoppy-kamen-rider-ex-aid.html",
      "comic_name": "NicoPoppy (Kamen Rider Ex-Aid) - Oneshot"
    },
    {
      "tags": [
        "Anal",
        "BlowJobs",
        "Catgirls",
        "Che ít",
        "Double Penetration",
        "GangBang",
        "Loli",
        "Oneshot",
        "Sex Toys"
      ],
      "comic_link": "https://hentaivn.tv/2073-doc-truyen-leaving-the-school-festival.html",
      "comic_name": "Leaving the School Festival - Oneshot"
    },
    {
      "tags": [
        "BlowJobs",
        "Che nhiều",
        "Doujinshi",
        "Loli",
        "Nakadashi",
        "Oneshot",
        "Romance",
        "Small Boobs"
      ],
      "comic_link": "https://hentaivn.tv/10966-doc-truyen-unicorn-no-uni-o-corn-shitai-azur-lane.html",
      "comic_name": "Unicorn no Uni o Corn Shitai!! (Azur Lane) - Oneshot"
    },
    {
      "tags": [
        "Big Boobs",
        "Che ít",
        "Doujinshi",
        "Full Color",
        "Oneshot",
        "Romance",
        "Virgin"
      ],
      "comic_link": "https://hentaivn.tv/10359-doc-truyen-vuong-mien-toi-loi.html",
      "comic_name": "Vương Miện Tội Lỗi - Full màu"
    },
    {
      "tags": [
        "Che ít",
        "Doujinshi",
        "Fingering",
        "Group",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/9545-doc-truyen-nicomaki-triangle-revenge-love-live.html",
      "comic_name": "NicoMaki Triangle Revenge (Love Live!) - One shot- [Yuri]"
    },
    {
      "tags": [
        "Che nhiều",
        "Doujinshi",
        "Fingering",
        "HentaiVN",
        "Idol",
        "Loli",
        "Oneshot",
        "School Uniform",
        "SchoolGirl",
        "Small Boobs",
        "Stockings",
        "Yuri"
      ],
      "comic_link": "https://hentaivn.tv/9072-doc-truyen-nicomaki-kanshou-party-love-live.html",
      "comic_name": "NicoMaki Kanshou Party (Love Live!) - Oneshot [Yuri]"
    }
  ]
}
```