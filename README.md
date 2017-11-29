# jessica
support weather info api for android app

# api
http://jessica.dongyi.link/welcome?location={location}

# data resource
https://www.heweather.com

# PHP Frame
Codeigniter 3.0+


{
    "HeWeather6": [
        {
            "basic": {
                "cid": "CN101010100",
                "location": "北京",
                "parent_city": "北京",
                "admin_area": "北京",
                "cnty": "中国",
                "lat": "39.90498734",
                "lon": "116.4052887",
                "tz": "+8.0"
            },
            "update": {
                "loc": "2017-11-28 14:50",
                "utc": "2017-11-28 06:50"
            },
            "status": "ok",
            "now": {
                "cloud": "0",
                "cond_code": "100",
                "cond_txt": "晴",
                "fl": "1",
                "hum": "13",
                "pcpn": "0",
                "pres": "1027",
                "tmp": "4",
                "vis": "8",
                "wind_deg": "299",
                "wind_dir": "西北风",
                "wind_sc": "3-4",
                "wind_spd": "14"
            },
            "daily_forecast": [
                {
                    "cond_code_d": "100",
                    "cond_code_n": "100",
                    "cond_txt_d": "晴",
                    "cond_txt_n": "晴",
                    "date": "2017-11-28",
                    "hum": "24",
                    "mr": "13:47",
                    "ms": "00:38",
                    "pcpn": "0.0",
                    "pop": "0",
                    "pres": "1027",
                    "sr": "07:13",
                    "ss": "16:52",
                    "tmp_max": "7",
                    "tmp_min": "-6",
                    "uv_index": "2",
                    "vis": "20",
                    "wind_deg": "308",
                    "wind_dir": "西北风",
                    "wind_sc": "微风",
                    "wind_spd": "16"
                },
                {
                    "cond_code_d": "101",
                    "cond_code_n": "100",
                    "cond_txt_d": "多云",
                    "cond_txt_n": "晴",
                    "date": "2017-11-29",
                    "hum": "17",
                    "mr": "14:18",
                    "ms": "01:41",
                    "pcpn": "0.0",
                    "pop": "0",
                    "pres": "1036",
                    "sr": "07:14",
                    "ss": "16:52",
                    "tmp_max": "2",
                    "tmp_min": "-5",
                    "uv_index": "1",
                    "vis": "20",
                    "wind_deg": "190",
                    "wind_dir": "南风",
                    "wind_sc": "微风",
                    "wind_spd": "4"
                },
                {
                    "cond_code_d": "100",
                    "cond_code_n": "100",
                    "cond_txt_d": "晴",
                    "cond_txt_n": "晴",
                    "date": "2017-11-30",
                    "hum": "20",
                    "mr": "14:51",
                    "ms": "02:46",
                    "pcpn": "0.0",
                    "pop": "0",
                    "pres": "1035",
                    "sr": "07:15",
                    "ss": "16:52",
                    "tmp_max": "3",
                    "tmp_min": "-6",
                    "uv_index": "2",
                    "vis": "20",
                    "wind_deg": "356",
                    "wind_dir": "北风",
                    "wind_sc": "微风",
                    "wind_spd": "4"
                }
            ],
            "lifestyle": [
                {
                    "brf": "较舒适",
                    "txt": "白天天气晴好但风力较强，早晚会感觉偏凉，午后舒适、宜人。",
                    "type": "comf"
                },
                {
                    "brf": "冷",
                    "txt": "天气冷，建议着棉服、羽绒服、皮夹克加羊毛衫等冬季服装。年老体弱者宜着厚棉衣、冬大衣或厚羽绒服。",
                    "type": "drsg"
                },
                {
                    "brf": "易发",
                    "txt": "天冷风大且昼夜温差也很大，易发生感冒，请注意适当增减衣服。",
                    "type": "flu"
                },
                {
                    "brf": "较适宜",
                    "txt": "天气较好，但考虑风力较强且气温较低，推荐您进行室内运动，若在户外运动注意防风并适当增减衣物。",
                    "type": "sport"
                },
                {
                    "brf": "一般",
                    "txt": "天气较好，温度稍低，加之风稍大，让人感觉有点凉，会对外出有一定影响，外出注意防风保暖。",
                    "type": "trav"
                },
                {
                    "brf": "中等",
                    "txt": "属中等强度紫外线辐射天气，外出时建议涂擦SPF高于15、PA+的防晒护肤品，戴帽子、太阳镜。",
                    "type": "uv"
                },
                {
                    "brf": "较不宜",
                    "txt": "较不宜洗车，未来一天无雨，风力较大，如果执意擦洗汽车，要做好蒙上污垢的心理准备。",
                    "type": "cw"
                },
                {
                    "brf": "良",
                    "txt": "气象条件有利于空气污染物稀释、扩散和清除，可在室外正常活动。",
                    "type": "air"
                }
            ],
            "air_now_city": {
                "aqi": "62",
                "co": "0",
                "main": "PM10",
                "no2": "7",
                "o3": "63",
                "pm10": "74",
                "pm25": "7",
                "pub_time": "2017-11-28 13:00",
                "qlty": "良",
                "so2": "2"
            }
        }
    ]
}
