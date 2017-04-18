var config = {
    lang: 'zh-cn',
    time: {
        timeFormat: 24
    },
    weather: {
        //change weather params here:
        //units: metric or imperial
        params: {
            q: 'Baarn,Netherlands',
            units: 'metric',
            // if you want a different lang for the weather that what is set above, change it here
            lang: 'nl',
            APPID: 'YOUR_FREE_OPENWEATHER_API_KEY'
        }
    },
	compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            '早上好！',
            '早课不能迟到哦！',
            '昨晚睡得怎么样呀？'
        ],
        afternoon: [
            '下午好啊！',
            '打起精神，还有半天又可以睡觉了！',
            '你今天气色真不错！'
        ],
        evening: [
            '学习了一天，早点休息吧！',
            '今天学习怎么样呀！',
            '泡个热水澡，好好放松放松！'
        ]
    },
    calendar: {
        maximumEntries: 10,
        url: "https://p01-calendarws.icloud.com/ca/subscribe/1/n6x7Farxpt7m9S8bHg1TGArSj7J6kanm_2KEoJPL5YIAk3y70FpRo4GyWwO-6QfHSY5mXtHcRGVxYZUf7U3HPDOTG5x0qYnno1Zr_VuKH2M"
    },
    news: {
        feed: 'http://www.xinhuanet.com/tech/news_tech.xml'
    }
}
