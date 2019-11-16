
import requests
from bs4 import BeautifulSoup

BASE_URL = "https://justjoin.it"


class Offer:
    url: str
    company_name: str
    company_logo_url: str
    job_title: str
    salary: str


def fetch_offers():
    req = requests.get(BASE_URL)
    base_soup = BeautifulSoup(req.text, features="html.parser")
    offers = base_soup.find_all("li", {"class": "offer-item"})

    return (collect_offer_info(offer) for offer in offers)


def collect_offer_info(offer_soup) -> Offer:
    offer = Offer()

    url = offer_soup.find("a", {"class": "item"}).get("href")
    offer.url = f"{BASE_URL}{url}"

    company_name = offer_soup.find("span", {"class": "company-name"}).text
    offer.company_name = company_name.replace(u"\ue0af", "").strip()

    offer.company_logo_url = offer_soup.find("img", {"class": "company-logo"}).get(
        "src"
    )
    offer.job_title = offer_soup.find("span", {"class": "title"}).text
    offer.salary = offer_soup.find("span", {"class": "salary"}).text

    return offer
