#!/usr/bin/env python
import app

if __name__ == "__main__":
    offers = app.fetch_offers()
    print(set([offer.company_name for offer in offers]))
