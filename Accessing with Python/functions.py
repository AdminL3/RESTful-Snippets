import requests
import config

base = "https://your-page/wp-json/restful-snippets/"
token = config.WP_TOKEN


def update_snippet(snippet_id, content):
    url = base + "update"

    headers = {
        "Authorization": f"Bearer {token}",
        "Content-Type": "application/json"
    }

    data = {
        'team_id': snippet_id,
        'content': content
    }

    try:
        response = requests.post(
            url,
            json=data,
            headers=headers
        )
        response.raise_for_status()
        print(f"Snippet for team {snippet_id} created/updated successfully.")
        return response.json()
    except requests.exceptions.RequestException as e:
        print(f"An error occurred while deleting snippet for team {
            snippet_id}: {e}")
        return f"An error occurred: {e}"


def remove_snippet(snippet_id):
    url = base + "delete"

    headers = {
        "Authorization": f"Bearer {token}",
        "Content-Type": "application/json"
    }

    data = {
        'snippet_id': snippet_id
    }
    try:
        response = requests.post(
            url,
            json=data,
            headers=headers
        )
        response.raise_for_status()
        print(f"Snippet for team {snippet_id} deleted successfully.")
        return response.json()
    except requests.exceptions.RequestException as e:
        print(f"An error occurred while deleting snippet for team {
            snippet_id}: {e}")
        return f"An error occurred: {e}"
