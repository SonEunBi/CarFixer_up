import pandas as pd
import ssl

url = 'https://kind.krx.co.kr/corpgeneral/corpList.do'


class StockItem():
    def __init__(self):
        # 코스피 종목 가져오기
        self.get_item_kospi()

        # 코스닥 종목 가져오기
        self.get_item_kosdaq()

    # 코스피 종목 리스트를 가져오는 메서드(해당 메소드를 작성해주시면 됩니다.)
    def get_item_kospi(self):
        self.kospi_code = pd.read_html(url + "?method=download&marketType=stockMkt")[0]
        self.stock_code.sort_values(['상장일'], ascending=True)
        self.stock_code = stock_code[['회사명', '종목코드']]
        self.stock_code = stock_code.rename(columns={'회사명': 'code_name', '종목코드': 'code'})

    # 코스닥 종목 리스트를 가져오는 메서드(해당 메소드를 작성해주시면 됩니다.)
    def get_item_kosdaq(self):
        self.kosdaq_code = pd.read_html(url + "?method=download&marketType=kosdaqMkt")[0]
        self.stock_code = stock_code[['회사명', '종목코드']]
        self.stock_code = stock_code.rename(columns={'회사명': 'code_name', '종목코드': 'code'})


if __name__ == "__main__":
    ssl._create_default_https_context = ssl._create_unverified_context

    s = StockItem()
